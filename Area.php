<?php
require 'request.php';
require 'class/area.php';
$converter = new area;
$data = handleRequest($converter);
$units = $converter->get_units();

include "form.php";