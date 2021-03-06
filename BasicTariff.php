<?php
class BasicTariff extends AbstractTariff
{
    const PRICE_FOR_KM_RUB = 10;
    const PRICE_FOR_MIN_RUB = 3;

    public function totalPrice()
    {
        $dop = parent::totalPrice();
        $minutesAmount =  $this->hourAmount * NUMBER_OF_MINUTES_IN_HOUR;
        $result = (self::PRICE_FOR_KM_RUB * $this->kmAmount + self::PRICE_FOR_MIN_RUB * $minutesAmount) * $this->koeff + $dop;
        return $result;
    }
}
