<?php
require 'request.php';
require 'class/speed.php';
$converter = new speed;
$data = handleRequest($converter);
$units = $converter->get_units();

include "form.php";