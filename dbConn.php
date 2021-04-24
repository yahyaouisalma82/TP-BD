<?php

$db = mysqli_connect("localhost","root","","etudiant");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>