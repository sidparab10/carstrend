<?php
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
	header("Location:index.php");
	echo "<script type='text/javascript'>alert('Incorrect Username or Password');</script>";
} else{
	$_SESSION['uname'] = $uid;
	header("Location: main.php");
}
?>