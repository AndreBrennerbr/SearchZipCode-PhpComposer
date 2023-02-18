<?php

require "vendor/autoload.php";

use Searchbrenner\Cep\Search;

$Search = new Search;

$result = $Search->getAddressFromZipCode('57035580');

var_dump($result);