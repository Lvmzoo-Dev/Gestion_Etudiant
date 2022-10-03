<?php 
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $sql ="SELECT* FROM personne WHERE prenom LIKE '%$search%' or nom LIKE '%$search%'";
    $listes=mysqli_query($connexion,$sql);
}else{
    $sql = "SELECT id, nom, prenom, age, nationalite, libelle as classe
    FROM personne 
    inner join classe on personne.ID_classe = classe.ID_classe
    where statut= 'active'
    ORDER BY `personne`.`id` ASC"
    ;
    $listes=mysqli_query($connexion,$sql);
}
?>
<script type = "text/javascript">
    function confirmation(){
      return confirm("voulez-vous vraiment supprimer cet article ?")
    }
</script>
<html>
<br>
<center><button>
      <td>
      <a class=" nav-link active  btn-dark" id= "btn" href="?page=ajouter">Ajout Etudiant</a>
      </td></button>
</center>
    <div class="col-md-8 mt-5 offset-2">
    <table class="table table-dark">
  <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Age</th>
        <th scope="col">Nationalite</th>
        <th scope="col">Classe</th>
        <th scope="col">Etat</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
        
      </tr>
  </thead>
  <tbody>
    <?php while ($p = mysqli_fetch_row($listes)):?>
        <tr>
        <th scope="row"><?=$p[0]?></th>
        <td><?=$p[1]?></td>     
        <td><?=$p[2]?></td>     
        <td><?=$p[3]?></td>     
        <td><?=$p[4]?></td>    
        <td><?=$p[5]?></td> 
        <td>
        <a class="btn btn-info" href = "?page=desactiver&id=<?=$p[0]?>">Desactiver</a>
        </td>    
        <td>
            <a class="btn btn-success" href = "?page=editer&id=<?=$p[0]?>">Modifier</a>
        </td>

        <td>
        <a class="btn btn-danger" href = "?page=delete&id=<?=$p[0]?>" onclick ="return confirmation();">Supprimer</a>
        </td>
        
        </tr>
    <?php endwhile?>
    </table>
    </div>
    </div>         
    </html>