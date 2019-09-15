<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Country;

interface CountryRepositoryInterface
{
    /**
     * @return Country[]
     */
    public function getAll();

    public function getById($id);

    public function save(Country $country);
}
