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
	<span>My Class Schedule</span> <br> </br>
 </div>




<div class ="announcementlarge">
<h2>Student Detail Schedule<br></br></h2>


<!-- Information -->
 
  <?php

	$query = "select section.section_id, course.course_id, course.title as course, subject.title as subject, course.credit_hours, concat(section.start_time,' - ', section.end_time) as meeting_time, section.days, section.semester, section.start_date, section.end_date, building.title, room.room_code, concat(user.first_name, ' ', user.last_name) as instructor
				from section
				join course
					on section.course_id = course.course_id
				join subject
					on course.subject_id = subject.subject_id
				join room
					on section.room_id = room.room_id
				join building 
					on room.building_id = building.building_id
				join professor
					on section.professor_id = professor.professor_id
				join user
					on professor.user_id = user.user_id
				join enrollment
					on section.section_id = enrollment.section_id
				join student
					on enrollment.student_id = student.student_id
                where student.student_id =";
					
	echo '<table id="course"> 
      <tr> 
          <th> SEC# </th> 
          <th> CRN </th> 
          <th> COURSE TITLE </th> 
          <th> SUBJECT </th> 
		  <th> CREDITS </th> 
          <th> TIME </th> 
		  <th> DAYS </th> 
		  <th> SEM </th> 
		  <th> BEGIN </th> 
		  <th> END </th> 
		  <th> BUILDING </th> 
		  <th> ROOM </th> 
		  <th> INSTRUCTOR </th> 
      </tr>';
	
	
	/*  Getting student_id  */
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
	  
	
	$query = $query.' '.$studentid.';';
	
	if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["section_id"];
        $field2name = $row["course_id"];
        $field3name = $row["course"];
        $field4name = $row["subject"];
        $field5name = $row["credit_hours"]; 
		$field6name = $row["meeting_time"]; 
		$field7name = $row["days"]; 
		$field8name = $row["semester"]; 
		$field9name = $row["start_date"];
		$field10name = $row["end_date"];
		$field11name = $row["title"];
		$field12name = $row["room_code"];
		$field13name = $row["instructor"];


        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td>
				  <td>'.$field6name.'</td>
				  <td>'.$field7name.'</td>
				  <td>'.$field8name.'</td>
				  <td>'.$field9name.'</td>
				  <td>'.$field10name.'</td>
				  <td>'.$field11name.'</td>
				  <td>'.$field12name.'</td>
				  <td>'.$field13name.'</td>
              </tr>';
    }
	echo"</table>";
    $result->free();
} 
	
 ?>
 
 
 <br></br>
</div>
<br></br>
</div>

  

<!-- End Page Content -->

</div>

<img src="./images/tower.jpg" class="w3-image w3-greyscale-min" style="width:100%" > 

<!-- Footer -->
<!--
name=" Tyce Yarborough"
!-->


</body>
</html>
