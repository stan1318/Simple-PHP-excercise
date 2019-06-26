<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="array and checkbox.php" method="post">
Mercedes:<input type="checkbox" name="cars[]" value="mercedes"><br>
Volkswagen:<input type="checkbox" name="cars[]" value="volkswagen"><br>
Opel:<input type="checkbox" name="cars[]" value="opel"><br>
<input type="submit">
    </form>
    The first brand you checked was:
    <?php
$cars=$_POST["cars"];

echo $cars[0];


    ?>
  </body>
</html>
