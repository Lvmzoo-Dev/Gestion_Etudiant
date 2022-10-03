<?php
$host = 'localhost'; 
$user= 'root';
$pwd = '';
$dbname = "L2GLKM";

try {
    $connexion = mysqli_connect($host, $user, $pwd, $dbname);
    if (!$connexion){
       throw new Exception('Error de connection de la base de donnee');
    }
} catch (Exception $th) {
    die($th->getMessage());
} 

?>