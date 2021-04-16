<?php
	include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/import.css">
<link rel="stylesheet" href="css/default.css">
<link rel="shortcut icon" href="images/lionbw.png" type="image/x-icon">
<script type="text/javascript" src="myjs.js"></script>
<style>
<link rel="stylesheet" type="text/css" href="./css/myslides.css">
</style>

<body>



<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

<?php
		if(isset($_SESSION["user_id"])){
			echo "<p style ='text-align:right'>Hello, ".$_SESSION["first_name"]. "</p>";
		}
	
?>


 <!-- Student Top -->
 <div class ="hometop">
	<span>Student Services</span>
	<br> </br>
 </div>


<article>
  <section>
  <img src="images/list.png" alt="list" style="width:100%;height:80%;">
	<button class="w3-button w3-black" type = "button" onclick="location.href='courseschedule.php'" > 
            Course Schedule
    </button> 
  </section>
  <section>
  <img src="images/calendar.png" alt="calendar" style="width:100%;height:80%;" >
	<button class="w3-button w3-black" type = "button" onclick="location.href='classschedule.php'" > 
            View My Class Schedule
    </button> 
  </section>
  <section>
	<img src="images/plus.png" alt="add/drop image" style="width:100%;height:80%;" >
	<button class="w3-button w3-black" type = "button" onclick="location.href='register.php'" > 
            Register, Add or Drop Classes
    </button> 
  </section>
  <section>
	<img src="images/exam.png" alt="grade image" style="width:100%;height:80%;" >
	<button class="w3-button w3-black" type = "button" onclick="location.href='grades.php'" > 
            My Grades
  </section>
  <section>
	<img src="images/transcript.png" alt="transcript image" style="width:100%;height:80%;" >
	<button class="w3-button w3-black" type = "button" onclick="location.href='transcript.php'" > 
            View My Transcripts
  </section>
  <section>
	<img src="images/cap.png" alt="cap image" style="width:100%;height:80%;" >
	<button class="w3-button w3-black" type = "button" onclick="location.href='contactadvisor.php'" > 
            Contact My Advisor
  </section>
</article>


<!-- End Page Content -->

</div>

<img src="./images/tower.jpg" class="w3-image w3-greyscale-min" style="width:100%" > 

<!-- Footer -->
<!--
name=" Tyce Yarborough"
!-->


</body>
</html>
