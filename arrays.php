<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
    <?php
    
      $numbers = array(4,8,15,16,23,42);
      echo $numbers[0];
    ?>
    <br />
    
    <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
    <?php echo $mixed[2]; ?><br />
    <?php //echo $mixed[3]; ?><br />
    <?php //echo $mixed ?><br />
    
    <?php echo $mixed[3][1]; ?><br />
    
    <?php $mixed[2] = "cat"; ?>
    <?php $mixed[4] = "mouse"; ?>
    <?php $mixed[] = "horse"; ?>
    
    <pre>
    <?php echo print_r($mixed); ?>
    <hr>
    <?php  print_r($mixed); ?>
    </pre>
    
    <?php 
      //PHP 5.4 added the short array syntax.
      $array = [1,2,3];
    ?>
    
  </body>
</html>

