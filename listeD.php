
<?php 
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $sql ="SELECT* FROM personne WHERE prenom LIKE '%$search%' or nom LIKE '%$search%'";
}else{
    $sql = "SELECT id, nom, prenom, age, nationalite, libelle as classe
    FROM personne 
    inner join classe on personne.ID_classe = classe.ID_classe 
    WHERE statut='desactive'";
    $listes=mysqli_query($connexion,$sql);
}
?><br><br>
    <div class="col-md-8 offset-2">
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
        <a class="btn btn-success" href = "?page=activer&id=<?=$p[0]?>">Activer</a>
        </td>
        </tr>
    <?php endwhile?>
    </table>
    </div>
</div>         
    