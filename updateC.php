<?php
if(isset($_POST['update1'])){
    $id_classe= $_post['id_classe'];
    $libelle= $_POST['libelle'];
    $descriptions= $_POST['descriptions'];
    
    $sql= "UPDATE classe SET  libelle='$libelle',descriptions='$descriptions' WHERE id_classe='$id_classe' ";
    mysqli_query($connexion,$sql);
    header('location:index.php?page=listeC');
}
if(isset($_POST['retour'])){
    header('location:index.php?page=listeC');
}
?>
<div class="container mt-5">
        <div class="col-md-6 offset-3">
        <h5 class="card-header">Update classe</h5>
        <div class="card-body"> 
            <form method="POST" action="#">
            <div class="mb-3" hidden>
            <input type="text" class="form-control" id_classe="id_classe" name="id_classe" value="<?= $et[0] ?>">
            </div> 
            <div class="mb-3">
                <label for="libelle" class="form-label">libelle</label>
                <input type="text" class="form-control" name="libelle" placeholder="libelle" value="<?= $et[1] ?>"autocomplete=off> 
             </div>

             <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control"  name="descriptions" placeholder="Description" value="<?= $et[2] ?>" autocomplete=off>
             </div>
           <button type="submit" class="btn btn-danger" name="retour">Retour</button>
        <button type="submit" class="btn btn-success" name="update1">Confirmer</button>
     </form>

   </div>
  </div>
</div>
