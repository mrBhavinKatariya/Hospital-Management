<?php

$sname="localhost";
$usname="root";
$pass="";
$dbname="trusteelogin";

$conn=mysqli_connect($sname,$usname,$pass,$dbname);
if($conn)
{
  //echo "done";
}
else
{
  echo "not done";
}
?>