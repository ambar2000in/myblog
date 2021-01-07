<?php
$server = "localhost";
$username = "root";
$password = "";
$db ="mydb";
$con = mysqli_connect($server, $username, $password, $db);
$result = mysqli_query($con,"SELECT * FROM myblog2");

$row = mysqli_fetch_array($result,MYSQLI_BOTH);


// $row = $result->fetch_assoc();

// echo $row["srno"]; 
// echo nl2br("\n");
// echo $row["info"];
// echo nl2br("\n");
// echo $row["pics"];
// echo nl2br("\n");
// echo $row["datestamp"];
// sleep(2);

// echo "<br>";
// echo "srno is " . is_numeric($row["srno"]) . "<br>";
// echo "info is " . is_string($row["info"]) . "<br>";
// echo "pic  is " . is_string($row["pics"]) . "<br>";
// echo "datestamp is " . is_string($row["datestamp"]) . "<br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body onload="myFunction()">

<h1 id="demo1"><?=$row["srno"] ?></h1>
<p id="demo2"><?= $row["info1"] ?></p>
<p id="demo4"><?= $row["datestamp"] ?></p>
<p id="demo5"><?= $row["info2"] ?></p>

<img src="<?= $row["picinfo"] ?>" alt="Indian Man" width="700" height="333">

<script>

// ********************************* can not REM php+ html merged line 
function myFunction()
  {
  document.getElementById("demo1").innerHTML = <?php echo $row["info3"]+1 ?>;
  }  
  </script>

</body>

</html>