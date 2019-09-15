<?php

declare(strict_types=1);

namespace App\Repository;

use App\Client\CompanyNameClient;
use App\Entity\Country;

final class ApiCountryRepository implements CountryRepositoryInterface
{
    /**
     * @var CompanyNameClient
     */
    private $client;

    public function __construct(CompanyNameClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return Country[]
     */
    public function getAll()
    {
        throw new \LogicException('Method not supported');
    }

    public function getById($id)
    {
        throw new \LogicException('Method not supported');
    }

    public function save(Country $country)
    {
        $this->client->updateCountry($country->title);
    }
}
