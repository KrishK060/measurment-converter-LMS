<?php
class area{
    private $units=[
        'liter'=>1,
        'milli liter'=>0.001,
        'us gallon'=>3.78541,
        'us quart'=>0.9463525,
        'cubic meter'=>1000,
        'cubic millimeter'=>0.000001,
    ];
 public function converter($value,$from,$to){
    if (!isset($this->units[$from]) || !isset($this->units[$to])) {
        return "Invalid Unit";
    }

    $ans = $value * $this->units[$from];
    return $ans / $this->units[$to];
 }
    public function get_units(){
        return array_keys($this->units);
    }
}