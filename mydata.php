<!-- DATABASE CONNECTION STARTS -->
<?php
$server = "localhost";
$username = "root";
$password = "";
$db ="mydb";
           
   // PORT 3306 
           
//    $username = "ulmn8jagnfx4kcpx";
//    $password="FqeR2bzSHuGSoRWizQKV";
//    $db ="bm2r5yopsfrjtyafew6x";
//    $server = "bm2r5yopsfrjtyafew6x-mysql.services.clever-cloud.com:3306";

$con = mysqli_connect($server, $username, $password, $db);

if(!$con)
{
die("Connection to this database failed due to ". mysqli_connect_error());
}    

echo ("Successful connection");

$sno=$_POST['sno'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$mdesc=$_POST['mdesc'];
 
//Serial number Automatically Increaments
 
 $sql="INSERT INTO trip (name, age, gender, email,  mdesc, dt)
values ('$name', '$age', '$gender', '$email', '$mdesc', current_timestamp());";

/*echo $sql;*/




$con->close();
   

?>
<!-- DATABASE CONNECTION ENDS -->