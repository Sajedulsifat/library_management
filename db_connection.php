<?php
$server="localhost";
$username="root";
$password="";
$databasename="library_mangement";
$con=mysqli_connect($server,$username,$password,$databasename);
if($con)
{
    echo "connection successful";
}
else
{
    echo "connection failed" .mysqli_connect_errno();
}

?>