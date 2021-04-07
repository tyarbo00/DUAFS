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
<link rel="shortcut icon" href="images/lionbw.png" type="image/x-icon">
<script type="text/javascript" src="myjs.js"></script>
<style>
<link rel="stylesheet" type="text/css" href="./css/myslides.css">
</style>

<body>

 <!-- Sign Up Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:1300px" id="login">
    <h2 class="w3-wide w3-left-side">Sign Up</h2>
    <p class="w3-opacity w3-left-side"><i>Create a new profile</i></p>
    <div class="w3-row w3-padding-32">
    
	<!--if error is in url, then print for user. if error=none print success full message-->
<?php
	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo"<p style = 'color:red'>Please fill in ALL fields</p>";
		}
		else if(($_GET["error"] == "invaliduid")){
			echo"<p style = 'color:red'>Use a proper username</p>";
		}
		else if(($_GET["error"] == "invalidemail")){
			echo"<p style = 'color:red'>Use a proper email</p>";
		}
		else if(($_GET["error"] == "passwordsdontmatch")){
			echo"<p style = 'color:red'>Passwords didn't match</p>";
		}
		else if(($_GET["error"] == "stmtfailed")){
			echo"<p style = 'color:red'>Something went wrong, try again</p>";
		}
		else if(($_GET["error"] == "usernametaken")){
			echo"<p style = 'color:red'>Username already taken</p>";
		}
		else if(($_GET["error"] == "none")){
			echo"<p style = 'color:green'>You have successfully signed up!</p>";
		}
	}

?>
	
	
      </div>
      <div class="w3-col m6">
       <form action = "includes/signup.inc.php" method = "post">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
 		  <ul style = "list-style: none;">
		<li><input class="w3-input w3-border" type="text" name="first" placeholder="First Name..."><li>
		<li><input class="w3-input w3-border" type="text" name="middle" placeholder="Middle Initial..."><li>
		<li><input class="w3-input w3-border" type="text" name="last" placeholder="Last Name..."><li>
		<li><input class="w3-input w3-border" type="text" name="email" placeholder="Email..."><li>
		<li><input class="w3-input w3-border" type="text" name="uid" placeholder="Username..."><li>
		<li><input class="w3-input w3-border" type="password" name="pwd" placeholder="Password..."><li>
		<li><input class="w3-input w3-border" type="password" name="pwdrepeat" placeholder="Repeat Password..."><li>
		<li><button class="w3-button w3-black w3-section w3-right" type = "submit" name="submit">Sign Up</button><li>
		</ul>         
          </div>
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
