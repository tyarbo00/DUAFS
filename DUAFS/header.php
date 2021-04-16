<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<link rel="shortcut icon" type="images/x-icon" href="images/lionbw.ico" />

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
   
	
		<!-- Change nav depending on user logged in or not...also change tabs based on permissions  -->
		<?php
		if(isset($_SESSION["user_id"])){
			//Home tab
			echo'<a href="home.php"class="w3-bar-item w3-button w3-padding-large">Home</a>';
			
			//Student tab
			if($_SESSION["is_student"] == 1 || $_SESSION["is_administrator"] == 1){
				echo'<a href="student.php"class="w3-bar-item w3-button w3-padding-large">Student Services</a>';
			}
			//Professor tab
			if($_SESSION["is_professor"] == 1 || $_SESSION["is_administrator"] == 1){
				echo'<a href="professor.php"class="w3-bar-item w3-button w3-padding-large">Professor Services</a>';
			}
			//Advisor tab
			if($_SESSION["is_advisor"] == 1 || $_SESSION["is_administrator"] == 1){
				echo'<a href="advisor.php"class="w3-bar-item w3-button w3-padding-large">Advisor Services</a>';
			}
			//Faculty tab
			if($_SESSION["is_professor"] == 1 || $_SESSION["is_advisor"] == 1 || $_SESSION["is_administrator"] == 1){
				echo'<a href="faculty.php"class="w3-bar-item w3-button w3-padding-large">Faculty Services</a>';
			}
			//Campus tab 
			echo'<a href="campus.php"class="w3-bar-item w3-button w3-padding-large">Campus Services and Information</a>';
			//Admin tab
			if($_SESSION["is_administrator"] == 1){
				echo'<a href="admin.php"class="w3-bar-item w3-button w3-padding-large">Admin Controls</a>';
			}

			//Default tabs
			echo'<a href="profile.php"class="w3-bar-item w3-button w3-padding-large w3-right">Profile</a>';
			echo'<a href="includes/logout.inc.php"class="w3-bar-item w3-button w3-padding-large w3-right">Logout</a>';
		}
		else{
			echo'<a href="index.php"class="w3-bar-item w3-button w3-padding-large">Home</a>';

			echo'<a href="signup.php"class="w3-bar-item w3-button w3-padding-large w3-right">Sign Up</a>';
			echo'<a href="login.php"class="w3-bar-item w3-button w3-padding-large w3-right">Sign In</a>';
		}
	
		?>		
	
  </div>
</div>
  

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#add" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Add</a>
  <a href="#retrieve" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Retrieve</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Home</a>
</div>

<!--
name=" Tyce Yarborough"
!-->

</html>