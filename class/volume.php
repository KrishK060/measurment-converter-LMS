<?php
class volume{
    private $units=[
        'liter'=>1,
        'milliliter'=>0.001,
        'us gallon'=>3.78541,
        'us quart'=>0.9463525,
        'cubic meter'=>1000,
        'cubic millimeter'=>0.000001,
    ];
 public function converter($value,$from,$to){
    if (!isset($this->units[$from]) || !isset($this->units[$to])) {
        return "Invalid Unit";
    }

    return  ($value * $this->units[$from]) / ($this->units[$to]);
 }
    public function get_units(){
        return array_keys($this->units);
    }
}