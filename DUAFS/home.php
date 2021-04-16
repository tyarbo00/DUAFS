<?php
	include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/import.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="shortcut icon" href="images/lionbw.png" type="image/x-icon">
<script type="text/javascript" src="js/myjs.js"></script>

<body>



<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

<?php
		if(isset($_SESSION["user_id"])){
			echo "<p style ='text-align:right'>Hello, ".$_SESSION["first_name"]. "</p>";
		}
	
?>


 <!-- Home Top -->
 <div class ="hometop">
	<img src="./images/lionbw.png" style="width:6%">
	<span>Welcome to DUAFS!</span>
	<br> </br>
 </div>
</div>

<div class="announcement">
  <h2>Campus Announcements</h2>
  <p>The following deadlines are for fall 2021 College of Health Sciences programs:</p>
  <p>April 15th - Surgical Technology<br>May 15th - Radiography<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Imaging Sciences - Diagnostic Medical Sonography
  <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Imaging Sciences - Leadership
  <br>May 20 - Dental Hygiene
  <br>July 1 - AAS-BSDH Online Completion Program</p>
  <p>Important dates for all UAFS students:</p>
  <p>May 1st-7th: Final Exam Week
  <br>May 7th-9th: Commencement
  <br>May 10th: Spring intersession & Maymester classes begin
  <br>May 14th: Spring grades available
  </p>
</div>
<br> </br>


<img src="./images/tower.jpg" class="w3-image w3-greyscale-min" style="width:100%" > 

<!-- Footer -->
<!--
name=" Tyce Yarborough"
!-->


</body>
</html>
