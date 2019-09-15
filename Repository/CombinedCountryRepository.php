<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Country;

final class CombinedCountryRepository implements CountryRepositoryInterface
{
    private $doctrineCountryRepository;
    private $apiCountryRepository;

    public function __construct(DoctrineCountryRepository $doctrineCountryRepository, ApiCountryRepository $apiCountryRepository)
    {
        $this->doctrineCountryRepository = $doctrineCountryRepository;
        $this->apiCountryRepository = $apiCountryRepository;
    }

    /**
     * @return Country[]
     */
    public function getAll()
    {
        return $this->doctrineCountryRepository->getAll();
    }

    public function getById($id)
    {
        return $this->doctrineCountryRepository->getById($id);
    }

    public function save(Country $country)
    {
        $this->apiCountryRepository->save($country);
    }
}
