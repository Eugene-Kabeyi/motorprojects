<?php

$link = mysqli_connect("localhost","root","","motor");

if(isset($_POST["submit"])){
    
  $firstname =$_POST ["finame"];
  $secondname =$_POST["miname"];
  $lastname =$_POST["laname"];
  $birthdate =$_POST["age"];
  $emailaddress =$_POST ["email"];
  $address =$_POST["address"];
  $street =$_POST["street"];
  $funame =$_POST["funame"];
  $phonenumberN =$_POST["phnumber"];
  $addressN =$_POST["addr"];
  $patientid =$_POST["patientid"];
  $weight =$_POST["weight"];
  $height =$_POST["height"];
  $bp =$_POST["bp"];
  $bmi =$_POST["bmi"];
  $ht =$_POST["ht"];
  $lb =$_POST["lb"];
  $patsig =$_POST["patsig"];
  $datetoday =$_POST["datetoday"];
  $drname =$_POST["drname"];
  $drsig =$_POST["drsig"];
  $Oother=$_POST["Oother"];
  $Other =$_POST["Other"];

  
  

    $sql = "INSERT INTO `hospital`( `firstname`, `secondname`, `lastname`, `birthdate`, `emailaddress`, `address`, `street`, `funame`, `phonenumberN`, `addressN`,`patientid`,  `weight`, `height`, `bp`, `bmi`,`ht`, `lb`, `patsig`, `datetoday`, `datenow`, `drname`, `drsig`, `Oother`, `Other`) 
      VALUES ('$firstname', '$secondname`, '$lastname', '$birthdate', '$emailaddress', '$address', '$street', '$funame', '$phonenumberN', '$addressN', 
    '$patientid',  '$weight', '$height', '$bp', '$bmi',     '$ht', '$lb', '$patsig',  '$drname', '$drsig','$Oother', '$Other')";
    
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
 <title>Title</title>

 <link rel="stylesheet" href="styles.css">

 <style>
     
     .headerstyle{
   border: 2px solid blue;
  background-color: cyan;

    
   
 }
 
 .spanstyle{
     border: 4px solid cyan;
 }

  .bodystyle{
    background-image: url(images/shutterstock_digitalhealth.jpg);
    background-repeat: repeat;
    background-position: center;
    background-size: contain;

 }

 </style>

</head>

    <body>
        <form action="hospital.php" method="post">
    
            <section class="headerstyle" >
              <p style="font-size: 60px ; font-family:Georgia, 'Times New Roman', Times, serif; color: white;">
              <span class="spanstyle"> <img src="images/newhosp.png" alt="Loading.."  height="200"  width=""></span>
              <span style=" float: top;">FAMILY CARE HOSPITAL</span></p>
            </section>
            <section class="bodystyle">
               <h1>PLEASE THIS FORM TO COMPLETION</h1>
               <div>   
                  <h3>Personal Information.</h3>
                </div>
                <div>
                 <label>First Name</label><br>
                 <input type="text" name="finame" required placeholder="Alex" class="inputstyle">
 
                 <label>Middle Name</label>
                 <input type="text" name="miname" required placeholder="Pita" class="inputstyle">

                 <label>Last Name</label>
                 <input type="text" name="laname" required placeholder="Njoki" class="inputstyle">
                </div>

                <div>
                 <label>D.O.B</label>
                  <input type="date" name="age" required  class="inputstyle">

             
                 <label>Email Address</label>
                 <input type="email" name="email">
                </div>

                  <label>Phone number</label><br>
                   <input type="tel" name="pnum" required placeholder="+254 " class="inputstyle">

             
                </div>

                <div>
                 <label>Address</label><br>
                 <input type="text" name="address" class="inputstyle"><br>

                 <label>Street </label><br>
                 <input type="text" name="street"  class="inputstyle"><br>
                </div>
             <hr>

                <div>   
                  <h3>Next of Kin.</h3>
                
                    <label>Full Names</label>
           
                  <input type="text" name="funame" required placeholder="Alex Pita" class="inputstyle">

                  <label>Phone number</label>
                  <input type="tel" name="phnumber" required placeholder="" class="inputstyle">

                   <label>Address</label>
                  <input type="text" name="addr" required placeholder="" class="inputstyle">
                </div>
                <hr>


     
                <div>
                   <h3>Medical Cover and Information</h3>
                    <div>
                     <label>Medical Scheme</label><br><br>
   
                      <input type="radio" name="medicalinsurance" value="NHIF" >
                      <label>NHIF</label>

                       <input type="radio" name="medicalinsurance" value="AON" >
                        <label>AON</label>

                        <input type="radio" name="medicalinsurance" value="jubilee" >
                        <label>Jubilee</label>

                       <input type="radio" name="medicalinsurance" value="britam" >
                     <label>Britam</label>

                     <input type="radio" name="medicalinsurance" value="other" >
                      <label>Other</label>

                    </div> 
                    <div>
                     <p>If other please specify below</p>
                     <textarea name="Other"  cols="65" rows="10"></textarea>
                    </div>
                </div>
        
                <div>
                 <h3>Patient Details</h3>

                 <label>Patient ID</label>
                 <input type="text" name="patientid" required placeholder="">
         
                 <label>Date</label>
                  <input type="datetime-local" name="datetoday" required placeholder="">               
      
                   <label>Type of Patient</label>
                   <select name="patienttype">
                     <option value="inpatient">Inpatient</option>
                     <option value="outpatient">Outpatient</option>
                    </select>
                </div>
                <br>

                <div>
            
                 <label>Weight :</label>
                 <input type="text" name="weight" required placeholder="">

      
                 <label>Height :</label>
                 <input type="text" name="height" required placeholder="">

                </div>
                <hr> 
                <div>

                 <h3>Vital Signs</h3>
                    <div>
            
                     <label>B.P :</label><br>
                     <input type="text" name="bp" required placeholder="">

                    </div>
                </div>
 
                <div>
      
                  <label>B.M.I :</label><br>
                 <input type="text" name="bmi" required placeholder="">

               </div>
      
                <div>
            
                  <label>Ht :</label><br>
                 <input type="text" name="ht" required placeholder="">
 
                </div>
        
                <div>
            
                 <label>lb :</label><br>
                 <input type="text" name="lb" required placeholder="">

                 </div>
                <div>
                  <h3>Medical Procedures </h3>
                    <P>Please specify any medical procedures undergone.</P>
                    <input type="checkbox" name="procedure" value="lab">
                    <label>Lab/Pathology Test</label>

                    <input type="checkbox" name="procedure" value="xray">
                    <label>X-ray</label>

                    <input type="checkbox" name="procedure" value="mri">
                  <label>M.R.I scan</label>

                 <input type="checkbox" name="procedure" value="tb">
                 <label>T.B test</label>

                 <input type="checkbox" name="procedure" value="usound">
                 <label>Ultra-sound</label>

                 <input type="checkbox" name="procedure" value="physio">
                 <label>Physiotherapy</label>

                  <input type="checkbox" name="procedure" value="oother">
                  <label>Other</label>

                    <div>
                     <p>If other please specify below</p>
                     <textarea name="Oother"  cols="65" rows="10"></textarea>
                    </div>

                </div>
                <div>
                 <h3>DECLARATION</h3>
                 <P>I hereby certify that the above information is correct and that I agree to undergo a medical checkup if required to do
                 so. I also declare that I will be responsible for the consequences of my eligibility to the applied course for giving false
                 medical information.
                 </P>
                   <label>Patients Signature:  </label><br>
                 <input type="text" name="patsig" required placeholder="">

                 <label>Date</label>
                 <input type="datetime-local" name="datenow" required placeholder="">  
                </div>
                <div>
                  <h3>GENERAL OBSERVATION AND DECLARATION BY DR/PHYSICIAN</h3>
                   <P>I hereby certify that the above information is correct, that the general state of
                   health, physical and mental condition of the patient is good and has undergone recoomended health procedures
                  </P>
                  <label>Physicians name:  </label><br>
                  <input type="text" name="drname" required placeholder="">

                  <label>Physicians signature:  </label>
        
                  <input type="text" name="drsig" required placeholder="">

                 <label>Date</label>
                 <input type="datetime-local" name="datenow" required placeholder="">  
                </div>

              <div>
                  <input class="buttonstyle" type="submit" name="submit"  VALUE="submit">
             </div>



            </section>

            <section class="footerstyle">

             </section>

   
        </form>
    </body>

</html>