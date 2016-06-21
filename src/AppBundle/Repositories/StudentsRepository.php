<?php

namespace AppBundle\Repositories;

use AppBundle\Entity\Student;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Response;

/**
 * StudentsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StudentsRepository extends EntityRepository
{

    public function saveNewStudent(Student $student)
    {
        $em = $this->getEntityManager();
        $em->persist($student);
        $em->flush();
        return new Response("Saved new group with id: ".$student->getId());
    }

    public function deleteStudent(Student $student)
    {
        $em = $this->getEntityManager();
        $id = $student->getId();
        $em->remove($student);
        $em->flush();
        return new Response("Removed group with id: ".$id);
    }
}
