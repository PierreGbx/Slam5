<?php

require_once 'connexionDB.php';

class employe extends ConnexionDB  {

	public function getAllEmploye() {
        return $this->cnx->query("SELECT * FROM employes")->fetchAll();
	}

	public function getEmploye($id) {
		$sql = $this->cnx->prepare("SELECT * FROM employes WHERE id=?");
		$sql->execute( array($id) );
		return $sql->fetch();
	}

	public function add($empl)
	{
		$sql = $this->cnx->prepare("INSERT INTO employes (prenom,nom,email,age,ville,pass,droit) 
        VALUES (?,?,?,?,?,?,?)");
		$sql->execute( array($empl['prenom'],$empl['nom'],$empl['email'],$empl['age'],$empl['ville'],$empl['pass'],$empl['droit']) );
		return $sql->rowCount();
	}

	public function edit($empl,$id)
	{
		$sql = $this->cnx->prepare("UPDATE employes 
                                    SET prenom=?,nom=?,email=?,age=?,ville=? 
                                    WHERE id=?");
        $sql->execute( array($empl['prenom'],$empl['nom'],$empl['email'],$empl['age'],$empl['ville'],$id) );
		return $sql->rowCount();
	}

	public function indentification($empl){
		$sql = $this->cnx->prepare('SELECT id, pass FROM employes WHERE email = ?');
		$sql->execute(array($empl['email']));
		return $sql->fetch();
	}

	public function delete($id)
	{
		$sql = $this->cnx->prepare("DELETE FROM employes WHERE id = ?");
		$sql->execute( array($id) );
		return $sql->rowCount();
	}
}