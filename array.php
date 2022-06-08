<?php

echo "<h3>Indexed Arrays</h3>";

$language= array("Javascript","Ruby","PHP","Kotlin","Java");
print_r ($language);

echo "<hr>";
foreach ($language as $value)
{
    echo "$value <br>";
}

echo "<hr>";
#arranging in an ascending order
sort($language);
print_r($language);

echo "<br>";
#arranging in a descending order
rsort($language);
print_r($language);


echo "<hr>";
echo "<h3>Associated Arrays</h3>";

$marks= array("Peter"=>77,"Jane"=>66,"Job"=>90);
print_r($marks);
echo "<br>";
echo "<hr>";

foreach ($marks as $key =>$value){
    echo "Your marks $key is $value <br>";
}
echo "<br>";
//sorting by value
##ASCENDING
rsort($marks);
print_r($marks);

##DESCENDING
echo "<br>";
arsort($marks);
print_r($marks);
echo "<br>";
echo "<hr>";


//sorting by key
##ASCENDING
ksort($marks);
print_r($marks);


##DESCENDING
echo "<br>";
krsort($marks);
print_r($marks);
echo "<br>";
echo "<hr>";


echo "<h3>Multidimensional Array</h3>";

$contact = array(
    array(
        "name" => "John Kamau",
        "email" =>"johnkamau@gmail.com",
        "age" => 20,
        "phone number" => "073456343",
    ),

    array(
        "name" => "Alex Tabu",
        "email" =>"aleta@gmail.com",
        "age" => 40,
        "phone number" => "015784979",
    ),

    array(
        "name" => "Mary Jane",
        "email" =>"mhj@gmail.com",
        "age" => 35,
        "phone number" => "014354476",
    ),
);

echo "The email for Alex is ".$contact[1]["email"];
echo "<br>";

echo "Mary's phone number is ".$contact[2]["phone number"];






