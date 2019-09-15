<?php

declare(strict_types=1);

namespace App\Client;

final class CompanyNameClient
{
    public function updateCountry(string $title)
    {
        $this->guzzle->send('PATCH', '/country', [
            'title' => $title,
        ]);
    }
}
