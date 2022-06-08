<?php

$link = mysqli_connect("localhost","root","","motor");


if(isset($_POST["submit"])){
    
  $firstname =$_POST ["firstname"];
  $secondname =$_POST["secondname"];
  $emailaddress =$_POST ["email"];
  $phonenumber =$_POST["pnumber"];

    $sql = "INSERT INTO `details`(`firstname`, `secondname`, `email`, `pnumber`)
         VALUES ('$firstname','$secondname','$emailaddress','$phonenumber')";
      
    $result = mysqli_query($link,$sql);

    if($result){
      echo "Data transmiitted to database";
    }else{
      echo "Error in data trasmission";
    }
    
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forms</title>
</head>
<body>
  <h3>Fill This Form</h3>
 <form action="postmethod.php" method="post">
   <div>
     <label>First name</label><br>
     <input type="text" name="firstname">
   </div><br>

   <div>
     <label>Second name</label><br>
     <input type="text" name="secondname">
   </div><br>

   <div>
     <label>Email Address</label><br>
     <input type="email" name="email">
   </div><br>

   <div>
     <label>Phone Number</label><br>
     <input type="tel" name="pnumber">
   </div><br>

   <div>
 
    <input type="submit" name="submit" value="SUBMIT DATA">
   </div>
 </form>

</body>
</html>




