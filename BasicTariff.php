<?php
class BasicTariff extends AbstractTariff
{
    protected $priceForKm = 10;
    protected $priceForMin = 3;

    public function totalPrice()
    {
        $result = ($this->priceForKm * $this->kmAmount + $this->priceForMin * $this->hourAmount * 60) * $this->koeff + $this->dop;
        echo "Сумма вашей поездки = $result руб.";
    }
}
