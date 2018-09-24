<?php

require_once 'model/employe.php';

class EmployeController {

	private $employes;

	public function __construct() {
		$this->employes = new employe();
	}

    public function index($notification = '') {
        $data['notification'] = $notification;
    	$data['employes'] = $this->employes->getAllEmploye();
    	include 'view/employe/index.php';
        die;
    }

    public function show() {
    	$employe = $this->employes->getEmploye($_GET['id']);
        if (!$employe) {
            die('Page Not Found 404');    
        }
    	include 'view/employe/show.php';
    }

    public function add() {
        $errors = array();

        if (isset($_POST['submit'])) {

            if (empty($_POST['prenom'])) {
                $errors['prenom'] = 'Le prénom doit être rempli';
            }
            if (empty($_POST['nom'])) {
                $errors['nom'] = 'Le nom doit être rempli';
            }
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !empty($_POST['email'])) {
                $errors['email'] = 'Merci de remplir l\'adresse email';
            }
            if (!is_numeric($_POST['age']) && !empty($_POST['age'])) {
                $errors['age'] = 'L\'age doit être un nombre';
            }
            if (empty($_POST['ville'])) {
                $errors['ville'] = 'La ville doit être remplie';
            }
            if (empty($_POST['pass'])) {
                $errors['pass'] = 'Le mot de passe est obligatoire !';
            }
            
            if (empty($errors)) {
                $add = $this->employes->add($_POST);
                if ($add) {
                    $msg = "L'employé ".$_POST['prenom'].$_POST['nom']." a été ajouté!";
                } 
                else {
                    $msg = "Impossible d'ajouter l'employé!";
                }
                $this->index($msg); // Redirection vers l'index
            }
        }
        include 'view/employe/add.php';
    }


    public function edit()
    {
        $epl = $this->employes->getEmploye($_GET['id']);

        $errors = array();

        if (isset($_POST['submit'])) {

            if (empty($_POST['prenom'])) {
                $errors['prenom'] = 'Le prénom doit être rempli';
            }
            if (empty($_POST['nom'])) {
                $errors['nom'] = 'Le nom doit être rempli';
            }
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !empty($_POST['email'])) {
                $errors['email'] = 'Merci de remplir l\'adresse email';
            }
            if (!is_numeric($_POST['age']) && !empty($_POST['age'])) {
                $errors['age'] = 'L\'age doit être un nombre';
            }
            if (empty($_POST['ville'])) {
                $errors['ville'] = 'La ville doit être remplie';
            }
            
            if (empty($errors)) {
                 $edit=$this->employes->edit($_POST,$_GET['id']);
                if ($edit) {
                    $msg = "L'employé ".$_POST['prenom'].$_POST['nom']." a été modifié!";
                } 
                else {
                    $msg = "Impossible de modifié l'employé!";
                }
                $this->index($msg); // Redirection vers l'index
            }
        }

        include 'view/employe/edit.php';

    }

    public function identification(){

        $identification=$this->employes->indentification($_POST);

        if (isset($_POST['submit'])) {
            
        if (!$identification)
    {   

    echo 'Mauvais identifiant ou mot de passe !';

    }

    if ($_POST['pass']=$identification['pass']) {

        $_SESSION['id'] = $identification['id'];

        $_SESSION['email'] = $_POST['email'];

        echo "Bonjour ".$_POST['email']."Vous êtes connecté ! Vous allez être rédirigé vers la page d'acceuil";

    }

    else {

        echo 'Mauvais identifiant ou mot de passe !';

    }
}

         include 'view/employe/identification.php';
 }

   

    public function delete()
    {
        $del = $this->employes->delete($_GET['id']);
        if ($del) {
            $msg = "L'employé ". $_GET['id']." a été supprimé.";
        } 
        else {
            $msg = "Impossible de supprimer l'employé!";
        }
        $this->index($msg); // Redirection vers l'index
    }
}