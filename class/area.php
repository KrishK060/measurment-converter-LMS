<?php
class area{
    private $units=[
        'square meter'=>1,
        'square kilometer'=>0.000001,
        'square millimeter'=>1000000,
        'square centimeter'=>10000,
        'hectare'=>0.0001,
        'acre'=>0.0002471054,
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