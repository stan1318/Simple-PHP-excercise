<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="site.php" method="get">
Method of cooking:<input type="text" name="cookingmethod">
Food:<input type="text" name="food">
Name:<input type="text" name="name">
<input type="submit">
    </form>
    <?php
    $cookingmethod=$_GET["cookingmethod"];
    $food=$_GET["food"];
    $name=$_GET["name"];
echo"I love $cookingmethod $food by $name";


     ?>

  </body>
</html>
