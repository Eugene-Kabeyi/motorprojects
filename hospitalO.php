<?php 

$link = mysqli_connect("localhost","root","","motor");

if(isset($_POST["submit"])){

  $firstname =$_POST ["finame"];
  $secondname =$_POST["miname"];
  $lastname =$_POST["laname"];
  $birthdate =$_POST["age"];
  $email=$_POST["email"];
  $pnum =$_POST["pnum"];
  $address =$_POST["address"];
  $street = $_POST["street"];
  $funame =$_POST["funame"];
  $phonenumberN =$_POST["phnumber"];
  $addressN =$_POST["addr"];

  $patientid =$_POST["patientid"];
  $datetoday =$_POST["datetoday"];
  $weight =$_POST["weight"];
  $height =$_POST["height"];
  $bp =$_POST["bp"];
  $bmi =$_POST["bmi"];
  $ht =$_POST["ht"];
  $lb =$_POST["lb"];





 $sql = "INSERT INTO `patients`( `firstname`, `secondname`, `lastname`, `birthdate`, `email`, `phonenumber`, `address`, `street`, `Kinfullname`, `Kinphonenumber`, `Kinaddress`) 
      VALUES ('$firstname','$secondname','$lastname','$birthdate','$email','$pnum','$address','$street','$funame','$phonenumberN','$addressN')";
 
 $sqlO ="INSERT INTO `admission`( `patientid`, `firstname`, `secondname`, `lastname`, `datetoday`, `weight`, `height`, `bp`, `bmi`, `ht`, `lb`) 
    VALUES ('$firstname','$firstname','$secondname','$lastname','$datetoday ','$weight','$height','$bp',' $bmi','$ht ',' $lb')";

    $result = mysqli_query($link,$sql);

    $resultO = mysqli_query($link,$sqlO);

    if($result){
      echo "Data transmiitted to database";
    }else{
      echo "Error in data trasmission ";
    }
    
    
    
      if($resultO){
        echo "Data transmiitted to database";
      }else{
        echo "Error in data trasmission";
      }    
}