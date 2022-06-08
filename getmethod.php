<?php

if(isset($_GET["submit"])){
    
    $firstname =$_GET ["firstname"];
    $secondname =$_GET["secondname"];
    $emailaddress =$_GET ["email"];
    $phonenumber =$_GET["pnumber"];

    echo "Your first name is $firstname <br>";
    echo "Your second name is $secondname <br>";
    echo "Your email is $emailaddress <br>";
    echo "Your phone number is $phonenumber <br>";
}