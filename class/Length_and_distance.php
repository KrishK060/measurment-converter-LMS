<?php
class Length_and_distance{
    private $units=[
        'meter'=>1,
        'kilometer'=>1000,
        'millimeter'=>0.001,
        'centimeter'=>0.01,
        'yard'=>0.9144,
        'mile'=>1609.34,
        'foot'=>0.3048,
        'inch'=>0.0254
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