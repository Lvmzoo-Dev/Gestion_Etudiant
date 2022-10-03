<?php 
    require_once("connection.php");
    $sql = "SELECT* FROM classe";
    $listeC = mysqli_query($connexion, $sql);
    if (isset($_POST["nom"])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $age = $_POST["age"];
        $nat = $_POST["nat"];
        $libelle = $_POST["libelle"];
        $sql = "INSERT INTO personne (nom, prenom, age, nationalite, ID_classe, Statut) values('$nom', '$prenom', $age, '$nat', $libelle, 'active')";

        // $response = mysqli_query($connection, $sql);
        try {
            $response = mysqli_query($connexion, $sql);
            //var_dump($sql); die;
        } catch (Exception $th) {
            die($th->getMessage());
        } 
        header('location:index.php?page=lister');
    } 
    if (isset($_POST["retour"])) {
        header('location:index.php');
    }   
?>

<div class="container mt-5">
    <div class="card col-md-6 offset-3" style="border:solid 2px grey;">
    <h5 class="card-header"> Formulaire D'inscription </h5>
    <div class="card-body"> 
        <form method="POST" action="ajout.php">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" autocomplete=off>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" autocomplete=off>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="age" autocomplete=off>
            </div>

            <div class="mb-3">
                <label for="nationalite" class="form-label">Nationalite</label>
                <select class="form-control" name="nat">
                <option value="Senegal">Senegal</option>
                    <option value="Mali">Mali</option>
                    <option value="Congo">Congo</option>
                    <option value="Algerie">Algerie</option>
                    <option value="Togo">Togo</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="classe" class="form-label">Classe</label>
                <select class="form-control" name="libelle">
                    <?php while ($p = mysqli_fetch_row($listeC)):?>
                    <option value="<?=$p[0]?>"><?=$p[2]?></option>
                    
                    <?php endwhile?>
                </select>
            </div>

            <button type="submit" class="btn btn-danger" name="retour">Retour</button>
            <button type="submit" class="btn btn-success" name="envoyer">Envoyer</button>
        </form>
    </div>
</div>
</div>
