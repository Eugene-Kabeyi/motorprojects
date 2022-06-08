<?php 
 
$link = mysqli_connect("localhost","root","","motor");

$sql = "SELECT * FROM `patients`";
  #code execution 

 $result = mysqli_query($link,$sql);

 if($result){
    $data = mysqli_num_rows($result);

    if($data>0){
        echo "<h3>The data</h3>";
        echo "<table>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>First Name</th>";
        echo "<th>Second Name</th>";
        echo "<th>Last name</th>";
        echo "<th>Birthdate</th>";
        echo "<th>email</th>";
        echo "<th>Phone number</th>";
        echo "<th>address</th>";
        echo "<th>street</th>";
        echo "<th>Kinfullname</th>";
        echo "<th>Kinphonenumber</th>";
        echo "<th>Kinaddress</th>";
        echo "</tr>";




        while($row =mysqli_fetch_array($result))
        {
         echo "<tr>";
         echo "<td>".$row['id']."</td>";
          echo "<td>".$row['firstname']."</td>";
              echo "<td>".$row['secondname']."</td>";
              echo "<td>".$row['lastname']."</td>";
              echo "<td>".$row['birthdate']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>".$row['phonenumber']."</td>";
              echo "<td>".$row['address']."</td>";
              echo "<td>".$row['street']."</td>";
              echo "<td>".$row['Kinfullname']."</td>";
              echo "<td>".$row['Kinphonenumber']."</td>";
              echo "<td>".$row['Kinaddress']."</td>";
              echo "</tr>";

              
        }
      }else{
        echo "No records in the database";
     }


    }else{
     echo "Error executing code".mysqli_error($link);
     
     }
