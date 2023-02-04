<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary</title>
</head>
<body>
    <h1>
        <?php echo "Hello world" ?> <br/>
        </h1>
        <?php
        $x=100;
        $output=($x>=100)?($x." is grater than or equal to 100"):($x. " is less than 100");
        echo $output;    ?> <br/>
        <hr>
        <?php
      $a = 41;
      $b = 13;
      $c = 1;
      $d = 20;    
      $result =(($a>=$b)||($c>=$d))?("a is larger than b OR c is larger than d"):("Invalid data");
      ?>
     <h1><?php echo $result;?></h1> 
</body>
</html>