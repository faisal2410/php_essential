<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops:While</title>
</head>
<body>
<?php
      $count = 0;
      while ($count <= 10) {
        if ($count == 5) {
          echo "FIVE, ";
        } else {
          echo $count . ", ";
        }
        $count++;  // increment by 1
      }
      echo "<br />";
      echo "Count: {$count}";
    ?>

    <br />
    <br />
    <?php // On your own exercise
    
      $count = 1;
      while ($count < 20) {
        if($count % 2 == 0) {
          echo "{$count} is even<br />";
        } else {
          echo "{$count} is odd<br />";
        }
        $count++;
      }
    
    ?>
</body>
</html>


