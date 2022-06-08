<?php

function addition($num1,$num2,$num3){
    $sum = $num3+$num2+$num1;
    echo "The sum of the numbers is $sum <br>";
    echo "<hr>";
}

addition(12,15,10);

addition(178,185,100);


function product ($num11,$num22){
    $prod = $num22*$num11;
    echo "The product of the numbers is $prod <br>";
}

product(168,190);
product(16,19);

echo "<hr>";
function division ($num111,$num222){
    $div = $num222/$num111;
    echo "The divison of the numbers is $div <br>";
}

division(168,190);
division(16,19);

echo "<hr>";
function even ($numX){
    $mod =$numX%2;

    if($mod==0){
        echo "This number $numX is even ";
    }else{echo "This number $numX is odd ";}
}
even(12 );echo "<br>";
even(15);


























































































