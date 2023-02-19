<?php

require "vendor/autoload.php";

use Searchbrenner\Cep\Search;

$Search = new Search;

$result = $Search->getAddressFromZipCode('');

var_dump($result);
