<?php 

const VOLUME_TO_GALLON  = array (

     'Bucket' => 4,
     'Butt' => 108,
     'Firkin' => 9,
     'HogsHead' => 54,
     'Pint' => 0.125     
);

// Gallons

function convert_to_gallons($value, $fromUnit) {
  
  if(array_key_exists($fromUnit, VOLUME_TO_GALLON)) {
    return $value * VOLUME_TO_GALLON[$fromUnit];
    } else {
    return "Unsupported Unit.";
  }
  }
 
 function convert_from_gallons($value, $toUnit) {

    if(array_key_exists($toUnit, VOLUME_TO_GALLON)) {
    return $value / VOLUME_TO_GALLON[$toUnit];
    } else {
    return "Unsupported Unit.";
}
}
 
 function convert_gallons($value, $fromUnit, $toUnit) {
   $gallonValue = convert_to_gallons($value, $fromUnit);
   $newValue = convert_from_gallons($gallonValue, $toUnit);
   return $newValue;
 }

 