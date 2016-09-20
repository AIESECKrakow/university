<?php


namespace AppBundle\Services;
use AppBundle\Config\PodioConfig;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Podio;
use PodioApp;
use PodioCategoryItemField;
use PodioError;
use PodioFieldCollection;
use PodioItem;
use PodioItemFieldCollection;
use PodioTextItemField;
use Symfony\Component\HttpFoundation\Response;

require_once '../vendor/podio-php/PodioAPI.php';

class PodioSynch
{

    private $config;
    private $app_id;
    private $app_expansion_id;
    private $repo;
    public function __construct( ObjectManager $em)
    {
        $this->config = new PodioConfig();
        Podio::setup($this->config->getClientKey(), $this->config->getClientSecret());
        $this->app_id = (integer)$this->config->getStudentsKey();
        $this->app_expansion_id = (integer)$this->config->getStudentsExpansionKey();

        $this->repo = $em->getRepository('AppBundle:Student');

    }

    public function exportStudents()
    {
        $query = $this->repo->createQueryBuilder('s')
            ->where('s.podio_synchronised = 0')
            ->getQuery();

        $students = $query->getResult();

        $students_exp = [];
        $students_krk = [];

        //the most awful part of the app, needs to be changed

        foreach ($students as $student) {
            if (strtolower($student->getGroup()->getCity()) === 'krakow'
             or strtolower($student->getGroup()->getCity()) === 'kraków') {
                $students_krk[] = $student;
            } else {
                $students_exp[] = $student;
            }
        }


        try {
            Podio::authenticate_with_app($this->app_id, $this->config->getStudentsToken());
            //     Podio::authenticate_with_app($this->app_expansion_id, $this->config->getStudentsExpansionToken());
            // Authentication was a success, now you can start making API calls.
        } catch (PodioError $e) {
            // Something went wrong. Examine $e->body['error_description'] for a description of the error.
            echo $e . "<br><br><br>";
        }

        foreach ($students_krk as $student) {

            $student->setPodioSynchronised(1);
            $city = $student->getGroup()->getCity();
            $name = $student->getFirstName();
            $surname = $student->getLastName();
            $phone = $student->getPhone();
            $email = $student->getEmail();
            $group = $student->getGroup()->getLevel() . $student->getGroup()->getInternalNumber();
            $language = $student->getGroup()->getLanguage()->getName();
            $attended = $student->getDiscount();
            $fields = new PodioItemFieldCollection(array(
                new PodioTextItemField(array("external_id" => "city", "values" => $city)),
                new PodioTextItemField(array("external_id" => "title", "values" => $name)),
                new PodioTextItemField(array("external_id" => "lastname", "values" => $surname)),
                new PodioTextItemField(array("external_id" => "phone", "values" => $phone)),
                new PodioTextItemField(array("external_id" => "email", "values" => $email)),
                new PodioTextItemField(array("external_id" => "group-2", "values" => $group)),
                new PodioTextItemField(array("external_id" => "language", "values" => $language)),
                new PodioTextItemField(array("external_id" => "attended-3", "values" => $attended)),
            ));
            $item = new PodioItem(array(
                'app' => new PodioApp($this->app_id), // Attach to app with app_id
                'fields' => $fields
            ));
            $item->save();
            $this->repo->updateStudent($student);
        }

        try {
            Podio::authenticate_with_app($this->app_expansion_id, $this->config->getStudentsExpansionToken());
            // Authentication was a success, now you can start making API calls.
        } catch (PodioError $e) {
            // Something went wrong. Examine $e->body['error_description'] for a description of the error.
            echo $e . "<br><br><br>";
        }

        foreach ($students_exp as $student) {

            $student->setPodioSynchronised(1);
            $city = $student->getGroup()->getCity();
            $name = $student->getFirstName();
            $surname = $student->getLastName();
            $phone = $student->getPhone();
            $email = $student->getEmail();
            $group = $student->getGroup()->getId() . $student->getGroup()->getLevel();
            $language = $student->getGroup()->getLanguage()->getName();
            $attended = $student->getDiscount();
            $fields = new PodioItemFieldCollection(array(
                new PodioTextItemField(array("external_id" => "city", "values" => $city)),
                new PodioTextItemField(array("external_id" => "title", "values" => $name)),
                new PodioTextItemField(array("external_id" => "lastname", "values" => $surname)),
                new PodioTextItemField(array("external_id" => "phone", "values" => $phone)),
                new PodioTextItemField(array("external_id" => "email", "values" => $email)),
                new PodioTextItemField(array("external_id" => "group-2", "values" => $group)),
                new PodioTextItemField(array("external_id" => "language", "values" => $language)),
                new PodioTextItemField(array("external_id" => "attended-3", "values" => $attended)),
            ));

            $item = new PodioItem(array(
                'app' => new PodioApp($this->app_expansion_id), // Attach to app with app_id
                'fields' => $fields
            ));
            $item->save();
            $this->repo->updateStudent($student);
        }
    }
}