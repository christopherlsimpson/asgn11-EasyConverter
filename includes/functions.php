<?php 

const LENGTH_TO_METER  = array (

     'Inches' => 0.0254,
     'Feet' => 0.3048,
     'Yards' => 0.9144,
     'Miles' => 1609.344,
     'Milimeters' => 0.001,
     'Centimeters' => 0.01,
     'Meters' => 1,
     'Kilometers' => 1000,
     'Acres' => 63.614907234075,
     'Hectares' => 100
);

// Length

function convert_to_meters($value, $fromUnit) {
  
  if(array_key_exists($fromUnit, LENGTH_TO_METER)) {
    return $value * LENGTH_TO_METER[$fromUnit];
  } else {
    return "Unsupported Unit.";
  }
  }
 
 function convert_from_meters($value, $toUnit) {
    if(array_key_exists($toUnit, LENGTH_TO_METER)) {
    return $value / LENGTH_TO_METER[$toUnit];
  } else {
  return "Unsupported Unit.";
}
}
 
 function convert_length($value, $fromUnit, $toUnit) {
   $meterValue = convert_to_meters($value, $fromUnit);
   $newValue = convert_from_meters($meterValue, $toUnit);
   return $newValue;
 }

 // Area
  
 function convert_to_square_meters($value, $fromUnit) {
    $fromUnit = str_replace('square', '', $fromUnit);
    if(array_key_exists($fromUnit, LENGTH_TO_METER)) {
        return $value *  pow(LENGTH_TO_METER[$fromUnit], 2);
      } else {
        return "Unsupported Unit.";
      }
    }

function convert_from_square_meters($value, $toUnit) {
    $toUnit = str_replace('square', '', $toUnit);
    if(array_key_exists($toUnit, LENGTH_TO_METER)) {
        return $value /  pow(LENGTH_TO_METER[$toUnit], 2);
      } else {
        return "Unsupported Unit.";
      }
 
}

function convert_area($value, $fromUnit, $toUnit) {
  $meterValue = convert_to_square_meters($value, $fromUnit);
  $newValue = convert_from_square_meters($meterValue, $toUnit);
  return $newValue;
}
?>
