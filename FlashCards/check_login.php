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

// Connect to server and select databse.
$link = mysqli_connect($host, $username, $password, $db_name);//Add or die please
// Check connection 
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  mysqli_close($link)//"Fuck that connection"
}
// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect SQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
//prepare query for execution
$result = pg_prepare($dbconn, "query", 'SELECT * FROM shops WHERE name = $1');
// Execute the prepared query.  Note that it is not necessary to escape
$result = pg_execute($dbconn, "query", array(""));
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$mypassword = password_hash($mypassword, PASSWORD_DEFAULT);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

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