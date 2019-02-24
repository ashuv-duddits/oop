<?php
class DayTariff extends AbstractTariff
{
    protected $priceForKm = 1;
    protected $priceForMin = 1000/(24*60);

    public function totalPrice()
    {
        $result = ($this->priceForKm * $this->kmAmount + $this->priceForMin * ceil(round($this->hourAmount)/24) * 24 * 60) * $this->koeff + $this->dop;
        echo "Сумма вашей поездки = $result руб.";
    }
}