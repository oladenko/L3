<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Currency
{
private $isoCode;


   public function __construct($isoCode)
    {

        $number = 3;
        if (mb_strlen($isoCode) != $number ){
            throw new InvalidArgumentException($isoCode);
        }
        if (mb_strlen($isoCode) == $number){
            return mb_strtoupper($isoCode);
        }
        $this->isoCode = $isoCode;
    }


    public function getIsoCode()
    {
        return $this->isoCode;
    }


    public function setIsoCode($IsoCode)
    {
        $this->isoCode = $IsoCode;
    }
public function equals (Currency $currency){
        return $this->isoCode == $currency->getIsoCode();
}

}
$code = new Currency('uah');
$code1 = new Currency('uah');
$code2 = $code->equals($code1);
var_dump($code2);

