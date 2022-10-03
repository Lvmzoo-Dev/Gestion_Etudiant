<?php 

    if(isset($_POST["envoyer"])){
        $libelle = $_POST["libelle"];
        $descriptions = $_POST["descriptions"];
        $nombre_etudiant= $_POST["nombre_etudiant"];

        $sql="INSERT INTO classe (libelle, description, nombre_etudiant) values ('$libelle','$descriptions',0)";

        mysqli_query($connexion, $sql);
        header('location:index.php?page=listeC');

    }if(isset($_POST["retour"])){
        header('location:index.php?page=listeC');
    }

?>



<div class="container mt-5">
        <div class="card col-md-6 offset-3">
        <h5 class="card-header">Formulaire Ajout classe</h5>
        <div class="card-body"> 
            <form method="POST" action="#">
            
            <div class="form-group"  >
                
                <label for="Libelle" class="form-label">Libelle</label>
          <select  class="form-control" name="libelle" > 
               <option value="L1GL">L1GL</option> 
               <option value="L2GL">L2GL</option> 
               <option value="L1IAGE">L1IAGE</option> 
               <option value="L2IAGE">L2IAGE</option>
               <option value="L1RI">L1RI</option> 
               <option value="L2RI">L2RI</option>
          </select>
            </div>
            <div class="mb-3">
                <label for="descriptions" class="form-label">Descriptions</label>
                <input type="textarea" class="form-control" id="description" name="descriptions" placeholder="descriptions" autocomplete=off>
             </div>
           <button type="submit" class="btn btn-danger" name="retour">Retour</button>
        <button type="submit" class="btn btn-success" name="envoyer">Envoyer</button>
     </form>
   </div>
</div>
</div>









