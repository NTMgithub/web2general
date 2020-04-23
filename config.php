<?php
$db_local='localhost';
$db_Servername='root';
$db_Password='';
$db_Name='web2';
$conn=mysqli_connect($db_local,$db_Servername,$db_Password,$db_Name);
if(!$conn)
{
    die("connect fail".mysqli_connect_error());
}
//echo("connected successfully");

?>