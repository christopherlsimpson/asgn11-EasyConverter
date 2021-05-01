<?php 

require_once('includes/functions_gallons.php');

$fromValue = '';
$fromUnit = '';
$toUnit = '';
$toValue = '';

if (!isset($_POST['submit'])) {
  $_POST['submit'] = '';
  $fromValue = $_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];

  $toValue = convert_gallons($fromValue, $fromUnit, $toUnit);

}

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Gallons</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Gallons</h1>
  
      <form action="volume.php" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" />&nbsp;
          <select name="fromUnit">
            <option value="Bucket"<?php if($fromUnit == 'Bucket') {echo " selected"; } ?>>1 bucket</option>
            <option value="Butt"<?php if($fromUnit == 'Butt') {echo " selected"; } ?>>1 butt</option>
            <option value="Firkin"<?php if($fromUnit == 'Firkin') {echo " selected"; } ?>>1 firkin</option>
            <option value="HogsHead"<?php if($fromUnit == 'HogsHead') {echo " selected"; } ?>>1 hogshead</option>
            <option value="Pint"<?php if($fromUnit == 'pint') {echo " selected"; } ?>>1 pint</option>
           
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="toValue" value="<?php echo $toValue; ?>" />&nbsp;
          <select name="toUnit">
          <option value="Bucket"<?php if($toUnit == 'Bucket') {echo " selected"; } ?>>1 bucket</option>
            <option value="Butt"<?php if($toUnit == 'Butt') {echo " selected"; } ?>>1 butt</option>
            <option value="Firkin"<?php if($toUnit == 'Firkin') {echo " selected"; } ?>>1 firkin</option>
            <option value="HogsHead"<?php if($toUnit == 'HogsHead') {echo " selected"; } ?>>1 hogshead</option>
            <option value="Pint"<?php if($toUnit == 'Pint') {echo " selected"; } ?>>1 pint</option>
            
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
