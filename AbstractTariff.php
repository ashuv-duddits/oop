<?php
abstract class AbstractTariff implements InterfaceTariff
{
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
        if ($age>=18 && $age<=21) {
            $this->koeff = 1.1;
        }
        if ($dopGPS) {
            $this->dop += $this->dopGPS(ceil($hour));
        }
        if ($dopDriver) {
            $this->dop += $this->dopDriver();
        }
    }
}
