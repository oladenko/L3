<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Money
{
    private $amount;
    private $currency;


    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function getAmount()
    {
        return $this->amount;
    }


    public function setAmount($amount)
    {
        if(!is_int($amount) || !is_float($amount) ){
            throw new InvalidArgumentException($amount);
        }
        $this->amount = $amount;
    }


    public function getCurrency()
    {
        return $this->currency;
    }


    public function setCurrency($currency)
    {
        $number = 3;
        if (mb_strlen($currency) != $number ){
            throw new InvalidArgumentException($currency);
        }
        if (mb_strlen($currency) == $number){
            return mb_strtoupper($currency);
        }
        $this->currency = $currency;
    }
public function equals(Money $money){
    return   $this->amount == $money->getAmount() && $this->currency == $money->getCurrency();
}
public function add($money){
        if (  $this->currency == $money->getCurrency()){
         return    $this->amount +  $money->getAmount();
        }if ( $this->currency != $money->getCurrency()){
            throw new InvalidArgumentException($money);
    }
}
}
$index = new Money( 300, 'uah');
$index1 = new Money( 300, 'uah');
$index2 = $index->add($index1);
var_dump($index2);