<?php
class temperature{
    private $units=[
        'celsius',
        'fahrenheit',
        'kelvin'
    ];
 public function converter($value,$from,$to){
    if (!in_array($from, $this->units) || !in_array($to, $this->units)) {
        return "Invalid Unit";
    }
     switch (strtolower($from)) {
        case 'celsius':
            $celsius = $value;
            break;
        case 'fahrenheit':
            $celsius = ($value - 32) * 5/9;
            break;
        case 'kelvin':
            $celsius = $value - 273.15;
            break;
        default:
            return "Invalid 'from' unit";
    }

   
    switch (strtolower($to)) {
        case 'celsius':
            return $celsius;
        case 'fahrenheit':
            return ($celsius * 9/5) + 32;
        case 'kelvin':
            return $celsius + 273.15;
        default:
            return "Invalid 'to' unit";
    }
}
 
    public function get_units(){
        return ($this->units);
    }
}