<?php 

  require_once('includes/functions.php');


$fromValue = '';
$fromUnit = '';
$toUnit = '';
$toValue = '';

if ($_POST['submit']) {
  $fromValue = $_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];

  $toValue = convert_area($fromValue, $fromUnit, $toUnit);

}

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Area</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Area</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" />&nbsp;
          <select name="fromUnit">
            <option value="squareInches"<?php if($fromUnit == 'squareInches') {echo " selected"; } ?>>square inches</option>
            <option value="squareFeet"<?php if($fromUnit == 'squareFeet') {echo " selected"; } ?>>square feet</option>
            <option value="squareYards"<?php if($fromUnit == 'squareYards') {echo " selected"; } ?>>square yards</option>
            <option value="squareMiles"<?php if($fromUnit == 'squareMiles') {echo " selected"; } ?>>square miles</option>
            <option value="squareMillimeters"<?php if($fromUnit == 'squareMillimeters') {echo " selected"; } ?>>square millimeters</option>
            <option value="squareCentimeters"<?php if($fromUnit == 'squareCentimeters') {echo " selected"; } ?>>square centimeters</option>
            <option value="squareMeters"<?php if($fromUnit == 'squareMeters') {echo " selected"; } ?>>square meters</option>
            <option value="squareKilometers"<?php if($fromUnit == 'squareKilometers') {echo " selected"; } ?>>square kilometers</option>
            <option value="Acres"<?php if($fromUnit == 'Acres') {echo " selected"; } ?>>acres</option>
            <option value="Hectares"<?php if($fromUnit == 'Hectares') {echo " selected"; } ?>>hectares</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="toValue" value="<?php echo $toValue; ?>" />&nbsp;
          <select name="toUnit">
          <option value="squareInches"<?php if($toUnit == 'squareInches') {echo " selected"; } ?>>square inches</option>
            <option value="squareFeet"<?php if($toUnit == 'squareFeet') {echo " selected"; } ?>>square feet</option>
            <option value="squareYards"<?php if($toUnit == 'squareYards') {echo " selected"; } ?>>square yards</option>
            <option value="squareMiles"<?php if($toUnit == 'squareMiles') {echo " selected"; } ?>>square miles</option>
            <option value="squareMillimeters"<?php if($toUnit == 'squareMillimeters') {echo " selected"; } ?>>square millimeters</option>
            <option value="squareCentimeters"<?php if($toUnit == 'squareCentimeters') {echo " selected"; } ?>>square centimeters</option>
            <option value="squareMeters"<?php if($toUnit == 'squareMeters') {echo " selected"; } ?>>square meters</option>
            <option value="squareKilometers"<?php if($toUnit == 'squareKilometers') {echo " selected"; } ?>>square kilometers</option>
            <option value="Acres"<?php if($toUnit == 'Acres') {echo " selected"; } ?>>acres</option>
            <option value="Hectares"<?php if($toUnit == 'Hectares') {echo " selected"; } ?>>hectares</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
