<?php 

  function convert_to_meters($value, $fromUnit) {
  switch($fromUnit){
    case 'inches':
      return $value * 0.0254;
      break;
      case 'feet':
        return $value * 0.3048;
        break;
        case 'yards':
          return $value * 0.9144;
        break;
          case 'miles':
            return $value * 1609.344;
        break;
            case 'milimeters':
              return $value * 0.001;
        break;
              case 'centimeters':
                return $value * 0.01;
        break;
                case 'meters':
                  return $value;
        break;
                  case 'kilometers':
                    return $value * 1000;
        break;
                    default:
                    return "Unsupported Unit.";
  }
 
}

function convert_from_meters($value, $toUnit) {
  switch($toUnit){
    case 'inches':
      return $value / 0.0254;
      break;
      case 'feet':
        return $value / 0.3048;
        break;
        case 'yards':
          return $value / 0.9144;
        break;
          case 'miles':
            return $value / 1609.344;
        break;
            case 'milimeters':
              return $value / 0.001;
        break;
              case 'centimeters':
                return $value / 0.01;
        break;
                case 'meters':
                  return $value;
        break;
                  case 'kilometers':
                    return $value / 1000;
        break;
                    default:
                    return "Unsupported Unit.";
  }
 
}

function convert_length($value, $fromUnit, $toUnit) {
  $meterValue = convert_to_meters($value, $fromUnit);
  $newValue = convert_from_meters($meterValue, $toUnit);
  return $newValue;
}

$fromValue = '';
$fromUnit = '';
$toUnit = '';
$toValue = '';

if ($_POST['submit']) {
  $fromValue = $_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];

  $toValue = convert_length($fromValue, $fromUnit, $toUnit);

}

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Length</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Length</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" />&nbsp;
          <select name="fromUnit">
            <option value="inches"<?php if($fromUnit == 'inches') {echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if($fromUnit == 'feet') {echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if($fromUnit == 'yards') {echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if($fromUnit == 'miles') {echo " selected"; } ?>>miles</option>
            <option value="millimeters"<?php if($fromUnit == 'millimeters') {echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if($fromUnit == 'centimeters') {echo " selected"; } ?>>centimeters</option>
            <option value="meters"<?php if($fromUnit == 'meters') {echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if($fromUnit == 'kilometers') {echo " selected"; } ?>>kilometers</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="toValue" value="<?php echo $toValue; ?>" />&nbsp;
          <select name="toUnit">
          <option value="inches"<?php if($toUnit == 'inches') {echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if($toUnit == 'feet') {echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if($toUnit == 'yards') {echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if($toUnit == 'miles') {echo " selected"; } ?>>miles</option>
            <option value="millimeters"<?php if($toUnit == 'millimeters') {echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if($toUnit == 'centimeters') {echo " selected"; } ?>>centimeters</option>
            <option value="meters"<?php if($toUnit == 'meters') {echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if($toUnit == 'kilometers') {echo " selected"; } ?>>kilometers</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
