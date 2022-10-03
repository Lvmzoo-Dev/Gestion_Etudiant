<?php
if(isset($_POST['update'])){
    $id= $_POST['id1'];
    $nom= $_POST['nom1'];
    $prenom= $_POST['prenom1'];
    $age= $_POST['age1'];
    $nat= $_POST['nat'];

    $sql= "UPDATE personne SET nom = '$nom', prenom = '$prenom', age = $age, nationalite = '$nat' WHERE id=$id";

    mysqli_query($connexion,$sql);
    header('location:index.php?page=lister');
}
if(isset($_POST['retour'])){
    header('location:index.php?page=lister');
}
?>
<div class="container mt-5">
        <div class="col-md-6 offset-3">
        <h5 class="card-header">Modifier L'inscription</h5>
        <div class="card-body"> 
            <form method="POST" action="#">
            <div class="mb-3" hidden>
            <input type="text" class="form-control" id="id" name="id1" value="<?= $et[0] ?>">
            </div>      
            <div class="mb-3">
            
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom1" placeholder="nom" value="<?= $et[1] ?>">

             </div>

             <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom1" placeholder="prenom"value="<?= $et[2] ?>">

             </div>

             <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" name="age1" placeholder="age"value="<?= $et[3] ?>">

             </div>

    <div class="mb-3">
            <label for="nat" class="form-label">Nationalite</label>
            <select class="form-control" name="nat">
                     <option value="Senegal" <?php if($et[4]=="Senegal") echo 'selected';?> >Senegal</option>
                     <option value="Mali" <?php if($et[4]=="Mali") echo 'selected';?> >Mali</option>
                     <option value="Algerie" <?php if($et[4]=="Algerie") echo 'selected';?> >Algerie</option>
                     <option value="Togo" <?php if($et[4]=="Togo") echo 'selected';?> >Togo</option>
                     <option value="Congo" <?php if($et[4]=="Congo") echo 'selected';?> >Congo</option>
            </select>
    </div>
           <button type="submit" class="btn btn-danger" name="retour">Retour</button>
        <button type="submit" class="btn btn-success" name="update">update</button>
     </form>
   </div>
</div>
