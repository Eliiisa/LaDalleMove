<?php
include_once('models/BddConnect.php');
include_once("controller/UserController.php");
include_once("controller/SportController.php");
include_once("controller/SportUserController.php");
include_once("controller/AvatarController.php");

if (isset($_REQUEST['p'])) {
	$page = $_REQUEST['p'];
} else {
	$page = null;
}

session_start();

switch($page){
	case 'accueil':;
		$vue = 'views/accueil.php';
	break;
	case 'signInUp':
		$vue = 'views/signInUp.php';
	break;
	case 'inscription':
		$listAvatar = getAllAvatar();
		$vue = 'views/inscription.php';
	break;
	case 'signIn':
		$retour = addUser();
		if(!$retour) $vue = 'views/inscription.php';
		else {
			$vue = 'views/ecran.php';
		}
	break;
	case 'connexion':
		$vue = 'views/connexion.php';
	break;
	case "signUp":
		$retour = verifLogin();
		if(empty($retour)){
			$vue = 'views/connexion.php';
		}else{
			$listSport = getAllSport();
			$_SESSION["id"] = $retour->getId();
			$score = getScore();
			$vue = 'views/carte.php';
		}
	break;
	case 'ecran':
		$vue = 'views/ecran.php';
		break;
	case 'carte':
		$score = getScore();
		$listSport = getAllSport();
		$vue = 'views/carte.php';
	break;
	case 'sportTeste':
		$retour = sportTeste($_GET['sportId']);
		$listSport = getAllSport();
		$modalHelp = false;
		$score = getScore();
		$vue = 'views/carte.php';
		break;
	case 'resultat':
		$score = getScore();
		$profil = getProfilScore($score);
		$user = getUserById();
		$vue = 'views/resultat.php';
		break;
	default:
		$vue = 'views/accueil.php';

}

include_once('layouts/layout.php');
