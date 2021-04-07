<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
	$result;
	if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) ){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}


function invalidUid($username){
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/", $username )){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}


function invalidEmail($email){
	$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL) ){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}


function pwdMatch($pwd, $pwdRepeat) {
	$result;
	if($pwd !== $pwdRepeat ){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}


function uidExists($conn, $username, $email) {
	$sql = "SELECT * FROM user WHERE username = ? OR email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else{
		$result = false;
		return $result;
	}
	
	mysqli_stmt_close($stmt);
}




function createUser($conn, $first, $middle, $last, $email, $username, $pwd) {
	$sql = "INSERT INTO user (first_name, middle_initial, last_name, email, username, password) VALUES (?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	//hasing the password before insertion
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	
	mysqli_stmt_bind_param($stmt, "ssssss", $first, $middle, $last, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../signup.php?error=none");
	exit();
}


function emptyInputLogin($username, $pwd){
	$result;
	if(empty($username) || empty($pwd)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}


function emptyInputDelete($filename){
	$result;
	if(empty($filename)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}




function loginUser($conn, $username, $pwd ){
	$uidExists = uidExists($conn, $username, $username);
	
	if($uidExists === false){
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	
	$pwdHashed = $uidExists["password"];
	$checkPwd = password_verify($pwd, $pwdHashed);
	
	if($checkPwd === false){
		header("location: ../login.php?error=wronglogin");
	}
	else if($checkPwd === true){
		session_start();
		$_SESSION["user_id"] =  $uidExists["user_id"];
		$_SESSION["username"] =  $uidExists["username"];
		$_SESSION["email"] =  $uidExists["email"];
		$_SESSION["last_name"] =  $uidExists["last_name"];
		$_SESSION["first_name"] = $uidExists["first_name"];
		$_SESSION["is_student"] = $uidExists["is_student"];
		$_SESSION["is_professor"] = $uidExists["is_professor"];
		$_SESSION["is_advisor"] = $uidExists["is_advisor"];
		$_SESSION["is_administrator"] = $uidExists["is_administrator"];
		header("location: ../home.php");
		exit();
	}
	
}


