<?php
require 'request.php';
require 'class/mass.php';
$converter = new mass;
$data = handleRequest($converter);
$units = $converter->get_units();

include "form.php";