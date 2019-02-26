<?php
const NUMBER_OF_MINUTES_IN_HOUR = 60;
const NUMBER_OF_HOURS_IN_DAY = 60;
require "InterfaceTariff.php";
require "GPS.php";
require "driver.php";
require "AbstractTariff.php";
require "BasicTariff.php";
require "HourTariff.php";
require "DayTariff.php";
require "StudentTariff.php";
try {
    $basic = new DayTariff(5, 1, 25, true, false);
    $result = $basic->totalPrice();
    echo "Сумма вашей поездки = $result руб.";
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}
