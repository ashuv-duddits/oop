<?php
class DayTariff extends AbstractTariff
{
    const PRICE_FOR_KM_RUB = 1;
    const PRICE_FOR_DAY_RUB = 1000;

    public function totalPrice()
    {
        $dop = parent::totalPrice();
        $priceForMin = self::PRICE_FOR_DAY_RUB / (NUMBER_OF_MINUTES_IN_HOUR * NUMBER_OF_HOURS_IN_DAY);
        $hourRound = round($this->hourAmount);
        $dayRound = ceil($hourRound / NUMBER_OF_HOURS_IN_DAY);
        $minutesAmount =  $dayRound * (NUMBER_OF_HOURS_IN_DAY * NUMBER_OF_MINUTES_IN_HOUR);
        $result = ($this->priceForKm * $this->kmAmount + $priceForMin * $minutesAmount) * $this->koeff + $dop;
        return $result;
    }
}
