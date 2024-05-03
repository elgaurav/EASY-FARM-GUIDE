<?php
$servername="127.0.0.1";
$username="root";
$password="gaurav";
$database="easyfarmguide";
$con=mysqli_connect($servername,$username,$password,$database);

if(!$con)
{
    die("error detected".mysqli_error($con));
}
else 
{
    echo "Database has successfully connected !";
}
?>