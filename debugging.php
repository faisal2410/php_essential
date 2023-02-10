<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Debugging</title>
</head>
<body>
    <?php
      $number = 99;
      $string = "Bug?";
      $array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");
      
      var_dump($number);
      var_dump($string);
      var_dump($array);
    
    ?>
    <br />
    <pre>
    <?php
      // print_r(get_defined_vars());
    ?>
    </pre>
    <br />
    <?php

      function say_hello_to($word) {
        echo "Hello {$word}!<br />";
        var_dump(debug_backtrace());
      }

      say_hello_to('Everyone');
    ?>
  </body>
</html>

