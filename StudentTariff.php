<?php
class StudentTariff extends AbstractTariff
{
    protected $priceForKm = 4;
    protected $priceForMin = 1;

    public function totalPrice()
    {
        $result = ($this->priceForKm * $this->kmAmount + $this->priceForMin * $this->hourAmount * 60) * $this->koeff + $this->dop;
        echo "Сумма вашей поездки = $result руб.";
    }
}