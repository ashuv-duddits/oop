<?php
trait GPS
{
    public function dopGPS($hour)
    {
        return self::GPS_PRICE_PER_HOUR_RUB * $hour;
    }
}