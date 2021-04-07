<?php
	include_once 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/import.css">
<link rel="stylesheet" type="text/css" href="../css/default.css">
<link rel="stylesheet" type="text/css" href="../css/dark.css">
<link rel="shortcut icon" href="images/lionbw.png" type="image/x-icon">
<script type="text/javascript" src="myjs.js"></script>
<style>
<link rel="stylesheet" type="text/css" href="./css/myslides.css">
</style>

<body>



<!-- Login Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="login">
    <h2 class="w3-wide w3-left-side">Sign In</h2>
    <p class="w3-opacity w3-left-side"><i>To acesss Faculty and Student services</i></p>
    <div class="w3-row w3-padding-32">
   
   
   
   <!--Print errors -->
   <?php
	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo"<p style = 'color:red'>Please fill in ALL fields</p>";
		}
		else if(($_GET["error"] == "wronglogin")){
			echo"<p style = 'color:red'>Incorrect Username or Password</p>";
		}
	}

?>
      </div>
      <div class="w3-col m6">
       <form action = "includes/login.inc.php" method="post">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" name="uid" placeholder="Username/Email...">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="password" name="pwd" placeholder="Password...">
            </div>
          </div>
          <button class="w3-button w3-black w3-section w3-right" type="submit" name="submit">Sign In</button>
        </form>
      </div>
    </div>
  </div>
	


</section>	
  
  <!-- Home Section -->
    
	<div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p></p>
        
      </div>
      <div class="w3-third">
        <p></p>
       
      </div>
      <div class="w3-third">
        <p></p>
        
      </div>
    </div>
  </div>



<!-- End Page Content -->

</div>

<!-- Image -->
<img src="./images/tower.jpg" class="w3-image w3-greyscale-min" style="width:100%"> 

<!-- Footer -->


<!--
name=""
!-->
</body>
</html>
