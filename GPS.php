<?php
trait GPS
{
    public function dopGPS($hour)
    {
        return 15 * $hour;
    }
}