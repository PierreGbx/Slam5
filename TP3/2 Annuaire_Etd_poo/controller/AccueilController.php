<?php

class AccueilController
{
	public function index()
	{
		include "templates/header.php";
    if (!isset($_SESSION['id'])) {
      echo "
			<ul class='nav nav-pills nav-fill'>
  <li class='nav-item'>
    <a style='width:50%;margin-left:25%' class='nav-link active' href='?ctrl=employe&mth=add'>Crée un compte</a>
  </li>
  <li class='nav-item'>
    <a style='width:50%;margin-left:10%'class='nav-link active' href='?ctrl=install'>Installation de la base</a>
  </li>
    <li class='nav-item'>
    <a style='width:50%;margin-left:10%;' class='nav-link active' href='?ctrl=employe&mth=identification'>M'identifier</a>
  </li>
</ul>
		";
}
    else {
            echo "
      <ul class='nav nav-pills nav-fill'>
  <li class='nav-item'>
    <a style='width:50%;margin-left:25%' class='nav-link active' href='?ctrl=employe'>Accéder à l'annuaire des employés</a>
  </li>
  <li class='nav-item'>
    <a style='width:50%;margin-left:10%'class='nav-link active' href='?ctrl=install'>Installation de la base</a>
  </li>
    <li class='nav-item'>
    <a style='width:50%;margin-left:10%;' class='nav-link active' href='index.php?action=logout'>Déconnexion</a>
  </li>
</ul>
    ";
    }
		include "templates/footer.php"; 
	}
}


