<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\CountryRepositoryInterface;
use App\Service\CountryService;

final class CountryAdminController
{
    public function index(CountryRepositoryInterface $countryRepository)
    {
        $countries = $countryRepository->getAll();

        return $this->render('list', [
            'countries' => $countries,
        ]);
    }

    public function update($id, Request $request, CountryService $service)
    {
        $service->update($id, $request->data);
    }
}
