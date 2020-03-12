<?php
$num = 18;
echo $num--;

$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
echo $people['Amy']; // Outputs 21"

$i = 1;
while ($i < 7) {
  echo "The value is $i <br />";
  $i++;
}
/*
foreach (array as $value) {
   echo "code to be executed;";
  }
  //or
  foreach (array as $key => $value) {
     echo "code to be executed;";
  }
*/
  $names = array("John", "David", "Amy");
foreach ($names as $name) {
   echo $name.'<br />';
}

$x = 0;
while($x<=7) {
   $x++;
}
echo $x;

echo $_SERVER['PHP_SELF']."<BR>";
echo $_SERVER['SERVER_ADDR']."<BR>";
echo $_SERVER['SERVER_NAME']."<BR>";
echo $_SERVER['HTTP_HOST']."<BR>";
echo $_SERVER['REMOTE_PORT']."<BR>";
echo $_SERVER['SCRIPT_NAME']."<BR>";
echo $_SERVER['SCRIPT_URI']."<BR>";

abstract class Fruit { 
    private $color; 
      
    abstract public function eat(); 
      
    public function setColor($c) { 
      $this->color = $c; 
    } 
  } 
  
  class Apple extends Fruit {
    public function eat() {
      echo "Omnomnom";
    }
  }
  
  $obj = new Apple();
  $obj->eat();
?>