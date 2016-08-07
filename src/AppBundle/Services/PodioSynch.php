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
    private $repo;
    public function __construct( ObjectManager $em)
    {
        $this->config = new PodioConfig();
        Podio::setup($this->config->getClientKey(), $this->config->getClientSecret());
        $this->app_id = (integer)$this->config->getStudentsKey();
        try {
            Podio::authenticate_with_app($this->app_id, $this->config->getStudentsToken());
            // Authentication was a success, now you can start making API calls.
        }
        catch (PodioError $e) {
            // Something went wrong. Examine $e->body['error_description'] for a description of the error.
            echo $e . "<br><br><br>";
        }
        //Podio::authenticate_with_app($this->config->getStudentsKey(), $this->config->getStudentsToken());

        $this->repo = $em->getRepository('AppBundle:Student');

    }

    public function exportStudents(){
        $query = $this->repo->createQueryBuilder('s')
            ->where('s.podio_synchronised = 0')
            ->getQuery();

        $students = $query->getResult();
        var_dump($students);

        foreach($students as $student){
            $student->setPodioSynchronised(1);

            $name = $student->getFirstName();
            var_dump($name);
            $surname = $student->getLastName();
            var_dump($surname);
            $phone = $student->getPhone();
            var_dump($phone);
            $email = $student->getEmail();
            var_dump($email);
            $group = $student->getGroup()->getId() . $student->getGroup()->getLevel();
            var_dump($group);
            $language = $student->getGroup()->getLanguage()->getName();
            var_dump($language);
            $attended = $student->getDiscount();
            var_dump($attended);
            $fields = new PodioItemFieldCollection(array(
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

    }
}