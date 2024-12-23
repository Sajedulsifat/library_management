<?php
$server="localhost";
$username="root";
$password="";
$databasename="library_mangement";
$con=mysqli_connect($server,$username,$password,$databasename);
if($con)
{
    echo " ";
}
else
{
    echo " " .mysqli_connect_errno();
}

?>