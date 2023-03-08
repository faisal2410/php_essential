<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops: for</title>
</head>
<body>

    <?php // while loop example
      $count = 0;
      while ($count <= 10) {
        echo $count . ", ";
        $count++;
      }
    ?>
    <br />
    <?php
    
      for($count = 0; $count <= 10; $count++) {
        echo $count . ", ";
      }
    
    ?>
    
    <br />
    <?php

      for ($count = 20; $count > 0; $count--) {
        if ($count % 2 == 0) {
          echo "{$count} is even.<br />";
        } else {
          echo "{$count} is odd.<br />";
        }
      }

    ?>
    

  </body>
</html>

