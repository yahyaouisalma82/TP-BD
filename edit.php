<?php
// including the database connection file
include_once("dbConn.php");

?>
<?php
//getting id from url
$cin = $_GET['CIN'];

//selecting data associated with this particular id
$result = mysqli_query($db, "select * from `etudiant` where CIN = '$cin'");

while($res = mysqli_fetch_array($result))
{
	$nom = $res['nom'];
	$prenom = $res['prenom'];
    $section=$res['section'];
}
?>
<html>
<head>	
    <link rel="stylesheet" href="node_modules/bootswatch/dist/minty/bootstrap.css"> 
	<title>Edit Data</title>
</head>

<body>
	<a href="home.php">Home</a>
	<br><br>
	
	<form class="form-group" name="form1" method="post" action="editProcess.php">
		<table class="table">
			<tr>
				<td>Nom</td>
				<td><input type="text" name="nom" value="<?php echo $nom;?>"></td>
			</tr>
			<tr>
				<td>Prenom</td>
				<td><input type="text" name="prenom" value="<?php echo $prenom;?>"></td>
			</tr>
		
            <tr> 
				<td>section</td>
				<td><input type="text" name="section" value="<?php echo $section;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="CIN" value=<?php echo $_GET['CIN'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>