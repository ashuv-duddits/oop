<?php
class HourTariff extends AbstractTariff
{
    protected $priceForKm = 0;
    protected $priceForMin = 200/60;

    public function totalPrice()
    {
        $result = ($this->priceForKm * $this->kmAmount + $this->priceForMin * ceil($this->hourAmount) * 60) * $this->koeff + $this->dop;
        echo "Сумма вашей поездки = $result руб.";
    }
}