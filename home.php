<?php
include_once 'header.php';
?>

<table class="table">
    <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>CIN</th>
        <th>Section</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    
    <?php include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from `etudiant`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['nom']; ?></td>
    <td><?php echo $data['prenom']; ?></td>
    <td><?php echo $data['CIN']; ?></td>    
    <td><?php echo $data['section']; ?></td>    
    <td><a href="edit.php?CIN=<?php echo $data['CIN']; ?>">Edit</a></td>
    <td><a href="delete.php?CIN=<?php echo $data['CIN']; ?>">Delete</a></td>
  </tr>	
    <?php
    }
    ?>
</table>
</body>
</html>