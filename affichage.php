<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $group = $_POST['group'];
    $sujet = $_POST['sujet'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $encadrement = $_POST['encadrement'];
    
    echo "<h1>Informations  :</h1>";
    echo "<p><strong>Nom :</strong> " . $nom . "</p></br>";
    echo "<p><strong>Prénom :</strong> " . $prenom . "</p></br>";
    echo "<p><strong>Groupe :</strong> " . $group . "</p></br>";
    echo "<p><strong>Sujet :</strong> " . $sujet . "</p></br>";
    echo "<p><strong>Date début :</strong> " . $date_debut . "</p></br>";
    echo "<p><strong>Date fin :</strong> " . $date_fin . "</p></br>";
    echo "<p><strong>Encadrement :</strong> " . $encadrement . "</p></br>";
} else {
    echo "<p>Aucune donnée soumise.</p>";
}
?>
</center>

</body>
</html>
