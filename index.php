<?php

$username = "uvq7xcypwmzx5xvf";
$password=yhdZhbEUV92SHqnY1cgr";
$db ="bmqo9dmih1eirf7e9sbo";
$server = "bmqo9dmih1eirf7e9sbo-mysql.services.clever-cloud.com:3306";


// $server = "localhost";
// $username = "root";
// $password = "";
// $db ="mydb";
$con = mysqli_connect($server, $username, $password, $db);
$result = mysqli_query($con,"SELECT * FROM myblog2");

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"> -->

<link rel="stylesheet" href="myprog1.css">
<link rel="stylesheet" href="myprog2.css">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body onload="myFunction()" class="w3-light-grey">

<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>MY BLOG</b></h1>
  <p>Welcome to the blog of <span class="w3-tag">Ambar</span></p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  
    <img src="<?=$row["pics1"]?>" alt="Nature" style="width:100%">

    <div class="w3-container">
      <h3><b>TITLE HEADING</b></h3>
      <h5>Title description<span class="w3-opacity"><?=$row["datestamp"] ?></span></h5>
    </div>

    <div class="w3-container">
      <p><?=$row["info1"] ?></p>

      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b></b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <!-- <p><span class="w3-padding-large w3-right"><b></b> <span class="w3-tag">0</span></span></p> -->
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  
  <img src="<?=$row["pics2"]?>" alt="Nature" style="width:100%">
     
    <div class="w3-container">
      <h3><b>BLOG ENTRY</b></h3>
      <h5>Title description, <span class="w3-opacity"><?=$row["datestamp"]?><?=$row["info2"] ?></span></h5>
    </div>

    <div class="w3-container">
      <p><?=$row["info2"] ?></p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b></b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <!-- <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge"></span></span></p> -->
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  
  <img src="<?=$row["pics3"]?>" alt="Nature" style="width:100%">
  

    <div class="w3-container w3-white">
      <h4><b>My Name</b></h4>
      <p><?=$row["info3"]?></p>
    </div>
  </div><hr>
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <!-- <h4>Popular Posts</h4> -->
    </div>
    <!-- <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">

     <img src="=$row["pics4"]?>" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Lorem</span><br>
        <span>Sed mattis nunc</span>
      </li>
      <li class="w3-padding-16">
        <img src="/w3images/gondol.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Ipsum</span><br>
        <span>Praes tinci sed</span>
      </li> 
      <li class="w3-padding-16">
        <img src="/w3images/skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Dorum</span><br>
        <span>Ultricies congue</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="suman3.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li>  
    </ul> -->
    <h2>E n q u i r i e s</h2>

<form id="myform" action="mydataenq.php" method="POST">
  <label for="name">N a m e :</label><br>
  <input type="text" id="name" name="name" required maxlength="100" size ="45" value=""><br>
  <label for="phone">P h o n e:</label><br>
  <input type="text" id="phone" name="phone" required maxlength="15" size ="45" value=""><br>
  <label for="rem">Remarks/Enquiries:</label><br>
  <input type="text" id="rem" name="rem" required maxlength="100" size ="45" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

  </div>
  <hr> 
 
  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <!-- <h4>Tags</h4> -->
    </div>
    <div class="w3-container w3-white">
    <!-- <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p> -->
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <!-- <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button> -->
  <!-- <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button> -->
  <p>Powered by <a href="#">Ams Infoways</a></p>
</footer>

<script>
function myFunction()
  {
         
  }  
  </script>
  
</body>
</html>
