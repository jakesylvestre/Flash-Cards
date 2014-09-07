<?php
/*
id int,
username varchar(255),
password varchar(255)
*/
//TODO add emails

require 'test_password.php';
ob_start();//Don't output anything

//Adding sql credentials
$host="localhost";
$username="replace_this";
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

print isset($_POST['myemail']);
$myemail=isset($_POST['myemail']);

$myusername=($_POST['myusername']);
$mypassword=($_POST['mypassword']);
//help:


// To protect SQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myemail = stripslashes($myemail);

$myusername = mysqli_real_escape_string($link, $myusername);
$mypassword = mysqli_real_escape_string($link, $mypassword);
$myemail = mysqli_real_escape_string($link, $myemail);

$mypassword = password_hash($mypassword, PASSWORD_DEFAULT);

$sql="INSERT INTO $tbl_name VALUES(username='$myusername' and password='$mypassword')";

mysqli_query($link, $sql);

// Mysql_num_row is counting table row

// If result matched $myusername and $mypassword, table row must be 1 row
mysqli_close($link); //"Fuck that connection"

ob_end_flush();

?>
