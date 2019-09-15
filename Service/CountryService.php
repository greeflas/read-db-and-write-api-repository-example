<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\CountryRepositoryInterface;

final class CountryService
{
    /**
     * @var CountryRepositoryInterface
     */
    private $countryRepository;

    public function __construct(CountryRepositoryInterface $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    public function update($id, array $data)
    {
        $country = $this->countryRepository->getById($id);

        // update logic

        $this->countryRepository->save($country);
    }
}
