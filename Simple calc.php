<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Simple calc.php" method="post">
    Number1:<input type="number" step="0.0001" name="num1">
    Operator:<input type="text" name="operator">
    Number2:<input type="number"step="0.0001" name="num2">
    <input type="submit">
  </form>
    <?php
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $operator=$_POST["operator"];

    if($operator=="+"){
      echo $num1+$num2;
    }
    elseif($operator=="-"){
      echo $num1-$num2;
    }
    elseif($operator=="*"){
      echo $num1*$num2;
    }
    elseif($operator=="/"){
      echo $num1/$num2;
    }

    ?>
  </body>
</html>
