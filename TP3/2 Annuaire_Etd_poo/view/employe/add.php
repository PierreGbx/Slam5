<?php include "templates/header.php";?>

<center>
<h2>Ajouter un employé</h2>

<form action="?ctrl=employe&mth=add" method="post">
    <label for="prenom">Prénom</label><br>
    <input type="text" name="prenom" id="prenom"><br>
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom"><br>
    <label for="email">Adresse mail</label><br>
    <input type="text" name="email" id="email"><br>
    <label for="age">Age</label><br>
    <input type="text" name="age" id="age"><br>
    <label for="ville">ville de résidence</label><br>
    <input type="text" name="ville" id="ville"><br>
    <label>Mot de passe</label><br>
    <input type="password" name="pass" id="pass"><br>
    <label>Droit</label><br>
    <select name="Droit" id="Droit"><option value="0">Utilisateur</option>
                                    <option value="1">Administrateur</option>
                                    <option value="2">Super Administrateur</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Ajouter">
    <br><br>

        <ul class='nav nav-pills nav-fill'>
  <li class='nav-item'>
    <a style='width:25%;margin-left:37%;margin-top: 2%;' class='nav-link active' href='?ctrl=Accueil&mth=index'>Retour au menu</a>
  </li>
</ul>
    
</center>
	<?php if ($errors) {
			?>
			<h3>Erreur:</h3>
			<ul>
				<?php foreach ($errors as $value) { ?>
					<li><?php echo $value; ?></li>
				<?php } ?>
			</ul>
	<?php } ?>
</form>

<?php include "templates/footer.php";?>