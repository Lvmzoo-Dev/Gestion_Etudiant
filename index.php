<?php

require_once("connexion.php");
require_once("menu.php");


if (isset($_GET["page"])) { 
    switch($_GET["page"]) {
        case 'ajouter':
            require_once("ajout.php");
            break;

        case'ajouterC':    
            require_once("ajoutC.php");
            break;        
        
        case 'lister':
            require_once("liste.php");
            break;
    
        case 'listeC':       
            require_once("listeC.php");
            break;
            
        case 'listeD':
            require_once("listeD.php");    
            break;
        case 'editer':
            $id = $_GET['id'];
            $sql = "SELECT * FROM personne WHERE id = $id";
            $liste = mysqli_query($connexion, $sql);
            $et = mysqli_fetch_row($liste);
            require_once("update.php");
            break;

        case 'editer1':
            $id_classe = $_GET['id'];
            $sql = "SELECT * FROM classe WHERE id_classe = $id_classe";
            $listeC = mysqli_query($connexion, $sql);
            $et = mysqli_fetch_row($listeC);
            require_once("updateC.php");
            break;

        case 'delete':
            $id = $_GET['id'];
            $sql = "DELETE FROM personne where id=$id";
            mysqli_query($connexion, $sql);
            header('location:index.php');
            break;
        case 'search':
            require_once 'liste.php';
            break;

        case 'delete1':
            $id_classe = $_GET['id_classe'];
            $sql= "DELETE FROM classe where id_classe = $id_classe";
            mysqli_query($connexion, $sql);
            header('location:index.php?page=listeC');
            break;
        case 'desactiver':
            $id = $_GET['id'];
            $sql= "UPDATE personne SET statut='desactive' WHERE id=$id";
            mysqli_query($connexion, $sql);
            header('location:index.php?page=lister');
            break;
    
        case 'activer':
            $id = $_GET['id'];
            $sql= "UPDATE personne SET statut='active' WHERE id=$id";
            mysqli_query($connexion, $sql);
            header('location:index.php?page=listeD');
            break;    

    }
}else{
    require_once("liste.php"); 
}  

?>