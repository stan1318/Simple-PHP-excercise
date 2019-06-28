<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
class Student{
var $name;
var $age;
var $grade;
function __construct($name,$age,$grade){
$this->name=$name;
$this->age=$age;
$this->grade=$grade;
}
function excellent(){
if($this->grade >= 5.5){
  return "Excellent!";
}
return "Better luck next time...";

}

}
$student1 = new Student("Ivan","26","5.5");
$student2 = new Student("Ace","35","5.2");
echo $student2->excellent();





    ?>
  </body>
</html>
