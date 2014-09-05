<?php

$host="localhost"; // Host name 
$username="jakesyl"; // username 
$password="testme"; // password 
$db_name="test"; // DB name 
$tbl_name="members"; // Table name 

$conn_string = "host= " + $localhost + "dbname= " + $db_name + " user= " + $username + " password = " + $password;

// Connect to server and select databse.
pg_connect($conn_string) or die "can't connect";
// username and password sent from form 
$username=$_POST['username']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$mypassword = stripslashes($mypassword);
$username = mysql_real_escape_string($username);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $mypassword, table row must be 1 row
if($count==1){

// Register $username, $mypassword and redirect to file "login_success.php"
session_register("username");
session_register("mypassword"); 
header("location:success.php");
}
else {
echo "Wrong Username or Password";
}
?>
