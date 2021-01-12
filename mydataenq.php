<!-- DATABASE CONNECTION STARTS -->
<?php
// $server = "localhost";
// $username = "root";
// $password = "";
// $db ="mydb";
           
   // PORT 3306 
           
   $username = "uvq7xcypwmzx5xvf";
   $password=yhdZhbEUV92SHqnY1cgr";
   $db ="bmqo9dmih1eirf7e9sbo";
   $server = "bmqo9dmih1eirf7e9sbo-mysql.services.clever-cloud.com:3306";


$con = mysqli_connect($server, $username, $password, $db);

if(!$con)
{
die("Connection to this database failed due to ". mysqli_connect_error());
}    

echo ("Successful connection");


$name=$_POST['name'];
$phone=$_POST['phone'];
$rem=$_POST['rem'];
 
//Serial number Automatically Increaments
 
 $sql="INSERT INTO enq (name, phone, datestamp, remarks)
values ('$name', '$phone', current_timestamp(), '$rem');";



// *******
if ($con->query($sql) == true)
{
    // echo ("Successfully Inserted"); 
    
    $con->close();

    // echo '<script>alert("Thanks For Enquiring we will reach you fast")</script>';
    // window.location.href='index.php';
    
    echo "<script>
    alert('Thanks For Enquiring we will reach you fast');
    window.location.href='index.php';
    </script>";
}
 
else
{
    echo "ERROR: $sql <br> $con->error";
    $con->close();
}



// header("location:index.php");   //REDIRECT TO CALLING FILE

?>
