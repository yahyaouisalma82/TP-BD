<?php

include "dbConn.php"; // Using database connection file here

$cin = $_GET['CIN']; // get id through query string

$del = mysqli_query($db,"delete from `etudiant` where CIN = '$cin'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:home.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>