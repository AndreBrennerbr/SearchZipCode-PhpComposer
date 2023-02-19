<?php

use PHPUnit\Framework\TestCase;
use Searchbrenner\Cep\Search;

class SearchTest extends TestCase
{
    public function testGetAddressFromZipCode()
    {
       $result = new Search;
       $result = $result->getAddressFromZipCode('57035580');
       
       $esperado =[ 
        'cep' => "57035-580",
       'logradouro' => "Rua Maria Júlia dos Santos",
       'complemento' =>"",
       'bairro' => "Jatiúca",
       'localidade' => "Maceió",
       'uf' => "AL",
       'ibge' => "2704302",
       'gia' =>"",
       'ddd' => "82",
       'siafi' => "2785" 
       ];

       $this->assertEquals($esperado,$result);
    }
}