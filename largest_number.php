<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

if($num1>$num2){
    $largest=$num1;

}
else if($num2>$num3){
    $largest=$num2;

}
else{
    $largest=$num3;
}
echo "The largest number among $num1,$num2,and $num3 is:  $largest";


?>