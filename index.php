<!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Inscription</title> 
</head> 
<body> 
<center>
    
<h2>Inscription</h2> 

<form action="affichage.php" method="POST"> 
    <label>Nom :</label> <br>
    <input type="text" name="nom" required> <br>

    <label>Prénom :</label> <br>
    <input type="text" name="prenom" required> <br>

    <label>Groupe :</label> <br>
    <input type="number" name="group" required min="0"> <br>

    <label>Sujet :</label> <br>
    <input type="text" name="sujet" required> <br>

    <label>Date début :</label> <br>
    <input type="date" name="date_debut" required> <br>

    <label>Date fin :</label> <br>
    <input type="date" name="date_fin" required> <br>

    <label>Encadrement :</label> <br>
    <input type="text" name="encadrement" required> <br>

    <input type="submit" value="Envoyer"> 
    <input type="reset" value="Annuler"> 
</form> 

</center>
</body> 
</html>
