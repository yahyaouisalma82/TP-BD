<?php
include_once("dbConn.php");
if(isset($_POST['update']))
{	

$nom = mysqli_real_escape_string($db, $_POST['nom']);
$prenom = mysqli_real_escape_string($db, $_POST['prenom']);
$cin = mysqli_real_escape_string($db, $_POST['CIN']);
$section = mysqli_real_escape_string($db, $_POST['section']);	
if(empty($nom) || empty($prenom) || empty($section)) {	
if(empty($nom)) {
echo '<font color="red">nom field is empty.</font><br>';
}
if(empty($prenom)) {
echo '<font color="red">prenom field is empty.</font><br>';
}
if(empty($section)) {
echo '<font color="red">Email field is empty.</font><br>';
}		
} else {	
$result = mysqli_query($db, "update `etudiant` set nom='$nom',prenom='$prenom',section='$section' WHERE CIN=$cin");
header("Location: home.php");
}
}
?>