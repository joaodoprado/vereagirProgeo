<?php

// src/Repository/FormDataRepository.php

namespace App\Repository;

use App\Entity\FormData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class FormDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormData::class);
    }

    public function save(FormData $formData): void
    {
        $entityManager = $this->getEntityManager();
        $entityManager->persist($formData);
        $entityManager->flush();
    }
}
