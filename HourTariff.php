<?php
class HourTariff extends AbstractTariff
{
    const PRICE_FOR_KM_RUB = 0;
    const PRICE_FOR_HOUR_RUB = 200;

    public function totalPrice()
    {
        $dop = parent::totalPrice();
        $priceForMin = self::PRICE_FOR_HOUR_RUB / NUMBER_OF_MINUTES_IN_HOUR;
        $hourRound = ceil($this->hourAmount);
        $minutesAmount =  $hourRound * NUMBER_OF_MINUTES_IN_HOUR;
        $result = (self::PRICE_FOR_KM_RUB * $this->kmAmount + $priceForMin * $minutesAmount) * $this->koeff + $dop;
        return $result;
    }
}
