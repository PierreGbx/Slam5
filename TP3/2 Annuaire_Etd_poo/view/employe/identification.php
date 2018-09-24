<?php include "templates/header.php";?>

<center>
<h2>Identification</h2>

<?php if(!isset($_SESSION['id'])){ ?>

<form action="?ctrl=employe&mth=identification" method="post">
    <label for="prenom">Adresse mail</label><br>
    <input type="text" name="email" id="email"><br>

    <label for="nom">Mot de passe</label><br>
    <input type="password" name="pass" id="pass"><br>

    <br><br>
    <input type="submit" name="submit" value="M'identifier">
    <br><br>

    <ul class='nav nav-pills nav-fill'>
  <li class='nav-item'>
    <a style='width:25%;margin-left:37%;margin-top: 2%;' class='nav-link active' href='?ctrl=employe&mth=add'>Crée un compte</a>
  </li>
</ul>

    <ul class='nav nav-pills nav-fill'>
  <li class='nav-item'>
    <a style='width:25%;margin-left:37%;margin-top: 2%;' class='nav-link active' href='?ctrl=Accueil&mth=index'>Retour au menu</a>
  </li>
</ul>
 
</center>

<?php } 

else {
    echo'<meta http-equiv="refresh" content="3; URL=index.php">'; //Redirection automatique
    echo'Vous êtes bien connecté '.$_SESSION['email'].',vous allez être rediger vers la page accueil';
}

?>



<?php include "templates/footer.php";?>