<?php
require 'dbnew.html';
/*require 'dbnew2.php';
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="compass";       //blank if no password is set for mysql.
$database="mytodo";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);*/
$host = "localhost";
$user = "root";
$db_name= "mytodo";
$pass= "compass";

$con = mysql_connect($host, $user, $pass);

if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("mytodo", $con);
If(isset($_POST['Submit']))
{

/*$name=mysql_real_escape_string($_POST['name']); //This value has to be the same as in the HTML form file
$age=mysql_real_escape_string($_POST['age']);
$phone=mysql_real_escape_string($_POST['phone']);
$password=mysql_real_escape_string($_POST['password']);
$cpassword=mysql_real_escape_string($_POST['cpassword']); //This value has to be the same as in the HTML form file*/
$sql="insert into user(name,age,phone,password,cpassword) values('".$_POST['name']."', '".$_POST['age']."', '".$_POST['phone']."','".$_POST['password']."' ,'".$_POST['cpassword']."')"; /*form_data is the name of the MySQL table where the form data will be saved.
name and email are the respective table fields*/

 if (!mysql_query($sql,$con)) {
die('Error: ' . mysql_error());
}
else
{
echo "The form data was successfully added to your database.";
mysql_close($con);
}
}
?>
