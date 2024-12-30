<?php

$sname="localhost";
$usname="root";
$pass="";
$dbname="new_review";

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