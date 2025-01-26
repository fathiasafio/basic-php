<?php
//variable= a reusable container that hold data, string, integer, float, boolean
  $name="fathia";
  echo"hello{$name}<br>";
  
$food ="pizza";
echo"you like {$food}<br>";
$email="fake@gmail.com";
echo"confirm that it is you {$email}<br>";
//the data type of this is string and the variable is  container//
  //to add a massege you need to give you give this {} and inside you write variable//
  
//next data integer//
$age= 21;
echo"you are {$age}years old";
$users= 22;
echo"there are $users users online";
$quantity= 3;
echo "you would like to buy{$quantity}items<br>";
//end of the integer//

//float start//
$gpa = 2.5;
echo"your gpa is: {$gpa}<br>";
$price = 4.66;
echo"the price of pizza is\${$price}<br>";
//if you want write the sign of dollar you most put this \  carefully//
$tax_rate = 5.1;
echo"the sale tax rate is:{$tax_rate}%<br>";
//float end//

//baloon start//
$employed = true;
echo"is there any employed{$employed}";
$online =false;
echo "online status {$online}<br>";
$for_sale = true;
echo "this was sold almost{$for_sale}";
//here is how you meight write  if you have resturent//
echo"you have ordered {$quantity}x{$food}";
$total = null;
$total =$quantity *$price;
echo"your total is: \${$total}<br>";



?>