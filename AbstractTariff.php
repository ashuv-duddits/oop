<?php
abstract class AbstractTariff implements InterfaceTariff
{
    const GPS_PRICE_PER_HOUR_RUB = 15;
    const DRIVER_PRICE = 100;
    protected $koeff = 1;
    protected $kmAmount;
    protected $hourAmount;
    protected $dop;
    use GPS;
    use driver;
    public function __construct($km, $hour, $age, $dopGPS, $dopDriver)
    {
        $this->kmAmount = $km;
        $this->hourAmount = $hour;
        if ($age<18 || $age>65) {
            throw new Exception('Ваш возраст не удовлетворяет требованиям ни одного из тарифов');
        } elseif ($age>25 && is_a($this, 'StudentTariff')) {
            throw new Exception('Ваш возраст не удовлетворяет требованиям данного тарифа, выберите другой тариф');
        } elseif ($age>=18 && $age<=21) {
            $this->koeff = 1.1;
        }
        if ($dopGPS) {
            $this->dop += $this->dopGPS(ceil($hour));
        }
        if ($dopDriver && !is_a($this, 'BasicTariff') && !is_a($this, 'StudentTariff')) {
            $this->dop += $this->dopDriver();
        }
    }
    public function totalPrice()
    {
        return $this->dop;
    }
}
