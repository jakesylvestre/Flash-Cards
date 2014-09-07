<?php
/*
id int,
username varchar(255),
password varchar(255)
*/
require 'test_password.php';

ob_start();//Don't output anything

//Adding sql credentials
$host="localhost";
$username="replace_this"
$password="replace_me"; 
$db_name="replace_this"; 
$tbl_name="members";

// Connect to server and select databse.
$link = mysqli_connect($host, $username, $password, $db_name);//Add or die please
// Check connection 


if (mysqli_connect_errno()) {//Error TODO try to reconnect and put this in a loop
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect SQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$myusername = mysqli_real_escape_string($link, $myusername);
$mypassword = mysqli_real_escape_string($link, $mypassword);

$mypassword = password_hash($mypassword, PASSWORD_DEFAULT);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

$result=mysqli_query($link, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
 
session_register("myusername");
session_register("mypassword"); 

header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
mysqli_close($link)//"Fuck that connection"

ob_end_flush();

?>
