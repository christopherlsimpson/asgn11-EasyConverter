<?php 

const LENGTH_TO_VOLUME  = array (

     'Bucket' => 4,
     'Butt' => 108,
     'Firkin' => 9,
     'HogsHead' => 54,
     'Pint' => 0.125,
     
);

// Length

function convert_to_gallons($value, $fromUnit) {
  
  if(array_key_exists($fromUnit, LENGTH_TO_VOLUME)) {
    return $value * LENGTH_TO_VOLUME[$fromUnit];
  } else {
    return "Unsupported Unit.";
  }
  }
 
 function convert_from_gallons($value, $toUnit) {
    if(array_key_exists($toUnit, LENGTH_TO_VOLUME)) {
    return $value / LENGTH_TO_VOLUME[$toUnit];
  } else {
  return "Unsupported Unit.";
}
}
 
 function convert_gallons($value, $fromUnit, $toUnit) {
   $meterValue = convert_to_gallons($value, $fromUnit);
   $newValue = convert_from_gallons($meterValue, $toUnit);
   return $newValue;
 }

 