<?php include "templates/header.php";?>

<center><h2>Afficher</h2>


<table>
	<body>
		<tr>
			<td>Prénom </td>
			<td><?php echo $employe['prenom']; ?></td>
		</tr>
		<tr>
			<td>Nom</td>
			<td><?php echo $employe['nom']; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><a href="mailto:<?php echo $employe['email']; ?>"><?php echo $employe['email']; ?></a></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><a <?php echo $employe['age']; ?>"><?php echo $employe['age']; ?></a></td>
		</tr>
		<tr>
			<td>Ville</td>
			<td><a href="https://www.google.com/maps?q=<?php echo $employe['ville']; ?>"><?php echo $employe['ville']; ?></a></td>
		</tr>
	</body>
</table>
</center>

<ul class='nav nav-pills nav-fill'>
  <li class='nav-item'>
    <a style='width:25%;margin-left:35%;margin-top: 2%;' class='nav-link active' href='?ctrl=Accueil&mth=index'>Retour au menu</a>
  </li>
</ul>

<?php include "templates/footer.php";?>