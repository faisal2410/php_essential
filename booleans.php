<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booleans</title>
</head>
<body>

<?php
  $result1 = true;
  $result2 = false;
?>
Result1: <?php echo $result1; ?><br />
Result2: <?php echo $result2; ?><br />

result2 is boolean? <?php echo is_bool($result2); ?>
<br />

<?php
  $number = 3.14;
  if( is_float($number) ) {
    echo "It is a float.";
  }

?>
</body>
</html>

