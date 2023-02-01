<?php

require_once "conn.php";

function readUser(){
	global $conn;
	$sql = "SELECT * FROM to_do ORDER BY id DESC";
	$query = mysqli_query($conn,$sql);
	$total_row = mysqli_num_rows($query);
	$rows = [];
	while($row = mysqli_fetch_assoc($query)){
		array_push($rows,$row);
	}	
	return $rows;
}

function createUser(){
	global $conn;
	$message = $_GET['message'];
	$sql = "INSERT INTO to_do (message) VALUES ('$message')";
	$query = mysqli_query($conn,$sql);
	if($query){
		echo "<script>location.href='read.php'</script>";
	}else{
		die("Query Failed : ".mysqli_error());
	}
}

function deleteUser(){
	global $conn;
	$id = $_GET['id'];
	$sql = "DELETE FROM to_do WHERE id=$id";
	$query = mysqli_query($conn,$sql);
	if($query){
		echo "<script>location.href='read.php'</script>";

	}else{
		die("Delete Failed : ".mysqli_error());
	}
}

function readOneUser($id){
	global $conn;
	$id = $_GET['id'];
	$sql = "SELECT * FROM to_do WHERE id=$id";
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($query);
	return $row;

}

function updateUser(){
	global $conn;
	$message = $_GET['message'];
	$id = $_GET['id'];
	$sql = "UPDATE to_do SET message='$message' WHERE id={$id}";
	$query = mysqli_query($conn,$sql);
	if(!$query){
		 die("Update Failed : ".mysqli_error());
	}else{
		echo "<script>location.href='read.php'</script>";

	}
}