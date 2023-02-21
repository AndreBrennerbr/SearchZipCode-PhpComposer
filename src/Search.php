<?php

namespace Searchbrenner\Cep;

use Searchbrenner\Cep\ws\ViaCep;

class Search
{
    public function getAddressFromZipCode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        return $this->getFromServer($zipCode);
    }

    public function getFromServer(string $zipCode): array
    {
        $get = new ViaCep();

        return $get->get($zipCode);
    }
}
