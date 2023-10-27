<?php
declare(strict_types=1);
require_once __DIR__ . "/CryptoInfo.php";
$request = new CryptoInfo();
foreach ($request->getCurrencyInfo() as $key => $value) {
    echo $key . " " . $value . PHP_EOL;
}

