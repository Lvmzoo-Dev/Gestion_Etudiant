<?php 
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $sql ="SELECT* FROM classe WHERE libelle LIKE '%$search%'";
    $listeC=mysqli_query($connexion,$sql);
}else{
    $sql = "SELECT* FROM classe";
    $listeC=mysqli_query($connexion,$sql);
    
}

?>
<script type = "text/javascript">
    function confirmation(){
      return confirm("voulez-vous vraiment supprimer cet article ?")
    }
</script><br>
<center><button>
        <td>
             <a class=" nav-link active  btn-dark" href="?page=ajouterC">Ajout Classe</a>
          </td></button>
</center>

    <div class="col-md-8 mt-5 offset-2">
    <table class="table table-dark">
  <thead>
      <tr>
        <th scope="col">ID_classe</th>
        <th scope="col">Libelle</th>
        <th scope="col">Description</th>
       
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
  </thead>
  <tbody>
    <?php while ($p = mysqli_fetch_row($listeC)):?>
        <tr>
        <th scope="row"><?=$p[0]?></th>
        <td><?=$p[1]?></td>     
        <td><?=$p[2]?></td>     
        
            
        <td>
            <a class="btn btn-success" href = "?page=editer1&id=<?=$p[0]?>">Modifier</a>
        </td>
        <td>
        <a class="btn btn-danger" href = "?page=delete1&id=<?=$p[0]?>" onclick ="return confirmation();">Supprimer</a>

        </td>
        
        </tr>
    <?php endwhile?>
    </table>
    </div>
    </div> 
   
    
        

