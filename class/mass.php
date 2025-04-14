<?php
class mass{
    private $units=[
        'kg'=>1,
        'Gram'=>1000,
        'Milligram'=>1000000,
        'Metric Ton'=>0.001,
        'Pound'=>2.2046244202,
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