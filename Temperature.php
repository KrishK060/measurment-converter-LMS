<?php
require 'request.php';
require 'class/temperature.php';
$converter = new temperature;
$data = handleRequest($converter);
$units = $converter->get_units();

include "form.php";