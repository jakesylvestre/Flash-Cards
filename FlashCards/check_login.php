<?php
/*
DB STRUCT:
CREATE TABLE members
(
    id int,
    username varchar(255),
    password varchar(255)
)*/
//Encrypt passwords? Nah, I'll do it later ;)
//test connections later, code now?
ob_start();
$host="localhost"; // Host name 
$username="replace_this"; // Mysql username 
$password="replace_me"; // Mysql password 
$db_name="replace_this"; // Database name; note to anyone it's bad practice to have this the same as other stuff
$tbl_name="members"; // Table name 

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// Connect to server and select databse.
$link = mysqli_connect($host, $username, $password, $db_name);//Add or die please
// Check connection 

$myusername=$_POST['myusername']; // Define $myusername and $mypassword 
$mypassword=$_POST['mypassword']; 

// To protect SQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($link, $myusername);
$mypassword = mysqli_real_escape_string($link, $mypassword);
$mypassword = password_hash($mypassword, PASSWORD_DEFAULT);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

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
ob_end_flush();
mysqli_close($link)//"Fuck that connection"

?>