<?php

$day= "Mon";
switch ($day){

    case "Mon";
     echo "Monday is the start of the week";
      break;

    case "Tue";
      echo "Tuesday is the second day of the week";
      break;

    case "Wed";
        echo "Wednesday is the third day of the week";
        break;

    case "Thur";
        echo "Thursday is the fourth day of the week";
        break;
    case "Fri";
        echo "Friday is the fifth day of the week";
        break;

    default;
        echo "Saturday and Sunday are Weekends";
        break;

}
echo "<h1>Loops in PHP</h1>";
echo "<h3>While Loop in PHP</h3>";

$s=0;
while ($s<=10) {

    echo "The value of S is $s ";
    $s++;
    echo("<br>");
}

echo("<hr>");

    $s=0;
while ($s<=10){

        echo "The value of S is $s ";
        $s+=2;
        echo("<br>");
}

echo("<hr>");

$s=1;
while ($s<=50) {
    echo "The value of S is $s ";
    $s += 2;
    echo("<br>");

}
echo "<h3>Do While Loop in PHP</h3>";

$c=10 ;

do{
    $c--;
    echo"The value of c is $c";
    echo "<br> <hr>";
}while($c>=0);

for ($d=0; $d<=10; $d+=2){
    echo "The value of d is $d";
    echo "<br>";
    echo "<hr>";
}
for ($y=12; $y<=100; $y+=4){
    echo "The value of d is $y";
    echo "<br>";
}



























































