<?php
declare(strict_types=1);

class CryptoInfo
{
    private string $base;
    private string $target;
    private array $currencyInfo;
    private string $api = "https://api4.binance.com/api/v3/ticker/24hr?symbol=";

    public function __construct()
    {
        $this->target = "BTC";
        $codes = explode(" ", readline(
            "Enter Crypto currency pair or Crypto currency (ETH BTC, LTC): "));
        $this->base = $codes[0];
        if (array_key_exists(1, $codes)) $this->target = $codes[1];
        $this->currencyInfo = json_decode(file_get_contents(
            $this->api . "$this->base" . "$this->target"
        ), true);

    }

    public function getCurrencyInfo(): array
    {
        return $this->currencyInfo;
    }
}
