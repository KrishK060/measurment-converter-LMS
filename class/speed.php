<?php
class speed{
    private $units=[
        'm/s'=>1,
        'km/h'=>0.27777777777778,
        'mph'=>0.44704166666667,
        'knot[kn]'=>0.51444444444444 ,
        'ft/s'=> 0.3048 ,
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