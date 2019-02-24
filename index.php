<?php
require "InterfaceTariff.php";
require "GPS.php";
require "driver.php";
require "AbstractTariff.php";
require "BasicTariff.php";
require "HourTariff.php";
require "DayTariff.php";
require "StudentTariff.php";

$basic = new BasicTariff(5, 1, 20, true, false);
$basic->totalPrice();
