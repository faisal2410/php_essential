<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings</title>
</head>
<body>
<?php
  
  echo "Hello World<br />";
  echo 'Hello World<br />';

  $greeting = "Hello";
  $target = "World";
  $phrase = $greeting . " " . $target;
  echo $phrase;
  ?>
  <br />
  <?php
  
  echo "$phrase Again<br />";
  echo '$phrase Again<br />';
  echo "{$phrase}Again<br />";
  
  ?>
</body>
</html>

