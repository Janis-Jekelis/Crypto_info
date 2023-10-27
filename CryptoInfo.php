<?php
declare(strict_types=1);
class CryptoInfo
{
    private string $base;
    private ?string $target;
    public function __construct()
    {
        [$this->base,$this->target]=explode(" ",readline(
            "Enter Crypto currency pair or Crypto currency (ETH BTC, LTC); "
        ));
        if($this->target==null){
            $this->target="BTC";
        }
        $request=json_decode(file_get_contents(
            "https://api4.binance.com/api/v3/ticker/24hr?symbol="."$this->base"."$this->target"),true);
        foreach ($request as $key=>$value) {
            echo $key . $value . PHP_EOL;
        }
    }
}
