<?php

include('database/dbconnection.php');
if($dbconfig)
{
  // echo "database is connected"; 
}
else
{
    header('location: database/dbconnection.php');
}
if(!$_SESSION['adminprofile'])
{
    header('location:login.php');
}

?>