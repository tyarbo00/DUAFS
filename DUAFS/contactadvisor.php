<?php
	include_once 'header.php';
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/import.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
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


 <!-- Faculty Top -->
 <div class ="hometop">
	<span>Contact Advisor</span><br> </br>
 </div>
 
<div class ="announcement">
<h2>Advisor Contact Information</h2>
<p><em>To contact advisor please email the address listed below. If you need the advisors office location or any other information, call the advising office at (479) 321-4564.</em> </p>
<p>Your advisor's Information: </p>

<!-- Information -->
 <?php
 /* Getting Student id from the user id */
	$id = $_SESSION["user_id"];
	$sql = "select student.student_id
			from student
			left join user
			on student.user_id = user.user_id
			where user.user_id = ?;";
	$stmt = $conn->prepare($sql); 
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$result = $stmt->get_result();
	$user = $result->fetch_assoc();
	$userfixed = array_values($user);
	$studentid = $userfixed[0];
	
	
	/* Getting students advisors info */
	$sql = "select user.first_name, user.last_name, user.email
			from advisor
			left join user
				on user.user_id = advisor.user_id
			inner join student
				on student.advisor_id = advisor.advisor_id
			where student.student_id = ?;";
	$stmt = $conn->prepare($sql); 
	$stmt->bind_param("i", $studentid);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = mysqli_fetch_array($result)){
		echo "Name: ".$row['first_name'] . " ";
		echo "".$row['last_name'] . "<br>";
		echo "Email: ".$row['email'] . "<br>";
}
	
 ?>
 <br> </br>
</div>
<!-- End Page Content -->
<br> </br>
</div>

<img src="./images/tower.jpg" class="w3-image w3-greyscale-min" style="width:100%" > 

<!-- Footer -->
<!--
name=" Tyce Yarborough"
!-->


</body>
</html>
