<?php include "templates/header.php";?>

<center>
<h2>Modifier un employé</h2>
<a href="?ctrl=employe">Retour</a><br><br>
<form action="?ctrl=employe&mth=edit&id=<?php echo $_GET['id']; ?>" method="post">
    <label for="prenom">Prénom</label><br>
    <input type="text" name="prenom" id="prenom" value="<?php echo $epl['prenom']; ?>"><br>
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom" value="<?php echo $epl['nom']; ?>"><br>
    <label for="email">Adresse mail</label><br>
    <input type="text" name="email" id="email" value="<?php echo $epl['email']; ?>"><br>
    <label for="age">Age</label><br>
    <input type="text" name="age" id="age" value="<?php echo $epl['age']; ?>"><br>
    <label for="ville">ville de résidence</label><br>
    <input type="text" name="ville" id="ville" value="<?php echo $epl['ville']; ?>">
    <br><br>
    <input type="submit" name="submit" value="Modifier">
    <br><br>
</form>

<?php include "templates/footer.php";?>
</center>