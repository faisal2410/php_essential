<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logical</title>
</head>
<body>
    
    <?php
      $a = 3;
      $b = 4;
      
      if ($a > $b) {
        echo "a is larger than b";
      } elseif ($a < $b) {
        echo "a is smaller than b";
      } else {
        echo "a is equal to b";
      }

    
    ?>
    <br />
    <?php // Only welcome new users
      $new_user = true;
      if ($new_user) {
        echo "<h1>Welcome!</h1>";
        echo "<p>We are glad you decided to join us.</p>";
      }
    ?>
    <br />
    
    <?php // don't divide by zero
      $numerator = 20;
      $denominator = 0;
      $result = 0;
      if ($denominator > 0) {
        $result = $numerator / $denominator;
      }
      echo "Result: {$result}";
    ?>
    
    

  </body>
</html>
