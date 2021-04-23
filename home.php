<?php
include_once 'autoload.php';
$personneRepository = new PersonneRepository();
$personnes = $personneRepository->findAll();
include_once 'header.php';
?>

<table class="table">
    <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>CIN</th>
        <th>Section</th>
    </tr>
    <?php foreach ($personnes as $personne) {
    ?>
    <tr>
            <td><?= $personne->nom ?></td>
        <td><?= $personne->prenom ?></td>
        <td><?= $personne->CIN ?></td>
        <td><?= $personne->section ?></td>
    </tr>
    <?php
    }
    ?>
</table>

</body>
</html>