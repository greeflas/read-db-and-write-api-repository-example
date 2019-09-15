<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Country;

final class DoctrineCountryRepository implements CountryRepositoryInterface
{
    public function getAll()
    {
        return $this->createQueryBuilder('c')
            ->getQuery()
            ->getResult()
        ;
    }

    public function getById($id)
    {
        $qb = $this->createQueryBuilder('c')
            ->andWhere('c.id = :id')
            ->setParameter('id', $id)
            ->innerJoin('c.images', 'i')
        ;

        $this->addImagesQuery($qb);

        return $qb
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function save(Country $country)
    {
        throw new \LogicException('Method not supported');
    }

    protected function addImagesQuery($qb)
    {
        $qb->andWhere('i.entity = :entity')
            ->setParameter('entity', Country::class)
        ;
    }
}
