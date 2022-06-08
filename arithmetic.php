<?php


$num1 =21 ;$num2 =30; $num3= 17;

echo("<h3>Arithmetic Operations.</h3>");
echo("<br>");

$sum =$num1+$num2;
$diff =$num2 -$num3;
$prod=$num1 *$num2;
$div= $num2 / $num3;
$mod=$num2%$num1 ;
$exp=$num3**$num1;

echo("The sum of $num1 and $num2 is $sum"); echo("<br>");

echo("The difference of $num2 and $num3 is $diff"); echo("<br>");

echo("The product of $num1 and $num2 is $prod"); echo("<br>");

echo("The modulus of $num2 and $num1 is $mod"); echo("<br>");

echo("The division of $num2 and $num3 is $div"); echo("<br>");

echo("The power of $num3 to $num1 is $exp"); echo("<br>");


echo("<h3>Assignment Operator.</h3>");

$x =15;
echo("The value of x = $x"); echo("<br>");
$x += 1;
echo("The new value of x = $x"); echo("<br>");

$x ++;
echo("The new value of x = $x"); echo("<br>");

echo("<h3>Comparison Operator.</h3>");


$AGE=14;
if ($AGE>=18){
    echo ("You are an adult");
}else{ echo ("You are a child");}

echo("<br>");

$password= 143;
$stored=143;

$passwordA= "D1143";
$storedS= "D143";


if($password==$stored){
    print ("Welcome to the system");
}else{
    print ("Wrong Password detected");
}
echo("<br>");

if($password===$stored){
    print ("Welcome to the system");
}else{
    print ("Wrong Password detected");
}
ECHO("<hr>");

if($passwordA==$storedS){
    print ("Welcome to the system");
}else{
    print ("Wrong Password detected");
}
echo("<br>");

if($passwordA===$storedS){
    print ("Welcome to the system");
}else{
    print ("Wrong Password detected");
}

if($passwordA1=$storedS){
print ("Welcome to the system");
}else{
    print ("Wrong Password detected");
}

echo ("<hr>");

$marks =50;
if($marks>0 and $marks<=30){
    $grade="E";
}elseif($marks>30 and $marks<=50) {
    $grade = "D";
}elseif($marks>50 and $marks<=70) {
    $grade = "C";
}elseif($marks>70 and $marks<=85) {
    $grade = "B";
}elseif($marks>85 and $marks<=100) {
    $grade = "A";
}else{$grade ="ERROR IN MARKS ENTERED";}

print ( "Grace scored $grade");
















































































































































