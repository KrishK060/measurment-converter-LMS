<?php
function handleRequest($converter)
{
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $from = $_POST['from-unit'];
        $to = $_POST['to-unit'];
        $input = $_POST['value'];
        if (is_numeric($input)) {
            $result = $converter->converter($input, $from, $to);
        } else {
            $result = "Please enter a valid number.";
        }
    }
 
    return $result;
}
 