<?php
abstract class AbstractTariff implements InterfaceTariff
{
    protected $koeff = 1;
    abstract public function totalPrice();
    protected $kmAmount;
    protected $hourAmount;
    protected $dop;
    use GPS;
    use driver;
    public function __construct($km, $hour, $age, $dopGPS, $dopDriver)
    {
        $this->kmAmount = $km;
        $this->hourAmount = $hour;
        $this->ageDetermination($age);
        if ($dopGPS) {
            $this->dop += $this->dopGPS(ceil($hour));
        }
        if ($dopDriver) {
            $this->dop += $this->dopDriver();
        }
    }
    public function ageDetermination($age)
    {
        if ($age>=18 && $age<=21) {
            $this->koeff = 1.1;
        }
    }
}