
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css" >
    <link rel="stylesheet" href="app.css">
    <title>CRUD</title>
</head>
<style>
  body{
  background-color:#FFEBCD;}
</style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    &nbsp;&nbsp; <a class="navbar-brand" href="index.php"> GROUPE ISI </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          
          <li class="nav-item active">
            <a class="nav-link active btn-outline-info" href="?page=lister">Liste des etudiants</a>
          </li>&nbsp;&nbsp;
          <li class="nav-item">
            <a class="nav-link active btn-outline-secondary" href="?page=listeC">Liste des classes</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;
   
          <li class="nav-item">
            <a class="nav-link active btn-outline-warning" href="?page=listeD">Liste des etudiants desactivées</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </ul>

        <form class="d-flex" action="?page=seach">
          <input class="form-control me-2" name="search" type="search" placeholder="search" aria-label>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </body>
</html>
