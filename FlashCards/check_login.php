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
//let's define our function, this is bad practice, but whatever i'll fix it later!:
function testPassword($password)
{
    if ( strlen( $password ) == 0 )
    {
        return 1;
    }

    $strength = 0;

    /*** get the length of the password ***/
    $length = strlen($password);

    /*** check if password is not all lower case ***/
    if(strtolower($password) != $password)
    {
        $strength += 1;
    }
    
    /*** check if password is not all upper case ***/
    if(strtoupper($password) == $password)
    {
        $strength += 1;
    }

    /*** check string length is 8 -15 chars ***/
    if($length >= 8 && $length <= 15)
    {
        $strength += 1;
    }

    /*** check if lenth is 16 - 35 chars ***/
    if($length >= 16 && $length <=35)
    {
        $strength += 2;
    }

    /*** check if length greater than 35 chars ***/
    if($length > 35)
    {
        $strength += 3;
    }
    
    /*** get the numbers in the password ***/
    preg_match_all('/[0-9]/', $password, $numbers);
    $strength += count($numbers[0]);

    /*** check for special chars ***/
    preg_match_all("'/[|!@#$%&*\/=?,;.:\-_+~^\\\]/'", $password, $specialchars);
    $strength += sizeof($specialchars[0]);

    /*** get the number of unique chars ***/
    $chars = str_split($password);
    $num_unique_chars = sizeof( array_unique($chars) );
    $strength += $num_unique_chars * 2;

    /*** strength is a number 1-10; ***/
    $strength = $strength > 99 ? 99 : $strength;
    $strength = floor($strength / 10 + 1);

    return $strength;
}

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
ob_end_flush();
mysqli_close($link)//"Fuck that connection"

?>