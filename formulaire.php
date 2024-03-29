<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulaire.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Formulaire</title>
</head>
<body>
    <!----------------------------------------------- Header ---------------------------------------------->
    <header>
      <div class="header">
              <h1 style="font-size: 1.7rem">
              <a href="accueil.php" style="color: black;">    ALI IDRIS <br> 
   25 ANS <br></a>
   Developpeur Web et Web Mobile
              </h1>
      </div>
      <nav class="navi">
         <ul class="nav nav-pills" style="justify-content: center;">
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color: black;">Mes Projets</a>
               <div class="dropdown-menu">
            
            <a class="dropdown-item" href="https://lissagecosmetiques.com/">Projet 1 - Site client cosmétique</a>
            <a class="dropdown-item" href="https://www.studiosneakers.store/">Projet 2 (en cours)</a>
            <a class="dropdown-item" href="../asset/projet/visuel.pdf">Projet Visuel 3</a>
            <a class="dropdown-item" href="https://examen.idrisali.online/view/accueil.php">Projet 4 (examen)</a>
            <a class="dropdown-item" href="../asset/projet/cvcode/cv.html">Projet 5 CV début de formation</a>
            
          </div>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="propos.php" style="color: black;">A propos </a>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Contact</a>
                 <div class="dropdown-menu">
                   <a class="dropdown-item" href="formulaire.php">Formulaire de contact</a>
                   <a class="dropdown-item" href="coordonnees.php">Mes coordonnées</a>
                 </div>
               </li>
           </ul>
         </nav>
  </header>
    <!----------------------------------------------- Header ---------------------------------------------->

    <!---------------------------------------------- Formulaire ------------------------------------------->
    <div class="container-fluid mt-3" style="width: 48%;">
        <button class="mb-2" type="button" id="start" style="margin-left: 41%;border-radius: 34px;padding: 1%;">Formulaire de contact</button>
        <form id="end" action="../controller/addmessage.php" method="POST" enctype="multipart/form-data">
           <div class="form-row">
              <div class="form-group col-sm-6">
         <label for="myEmail">email</label> <input type="email" class="form-control" id="myEmail" placeholder="Email" name="mail">
              </div>
              <div class="form-group col-sm-6">
                 <label for="nom">Nom</label> <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
              </div>
           </div>
           <div class="form-group">
         <label for="inputAddress">Adresse</label> <input type="text" class="form-control" id="myAddress" placeholder="1234 Rue Dev" name="adresse">
           </div>
           <div class="form-group">
         <label for="inputAddress2">Entreprise</label> <input type="text" class="form-control" id="mySociety" placeholder="Nom de l'entreprise" name="entreprise">
           </div>
           <div class="form-row">
              <div class="form-group col-sm-6">
                 <label for="myCity">Ville</label> <input type="text" class="form-control" id="myCity"placeholder="Ville" name="ville">
              </div>
              <div class="form-group col-sm-2">
                 <label for="numero">Numero</label> <input type="number" class="form-control" id="numero" name="num">
              </div>
           </div>       
           <div class="form-group">
            <label for="comment">Sujet:</label> <textarea class="form-control" rows="5" id="comment" name="msg"></textarea>
          </div> 
          <button type="submit" class="btn btn-primary">Envoyez</button>
        </form>
     </div>


<!---------------------------------------------- Formulaire ------------------------------------------->

<!----------------------------------------------- Footer ---------------------------------------------->
<div class="card text-center" style="background-color: transparent; margin-top: 2%;">
    <div class="card-header">
      Reseaux
    </div>
    <div  class="log">
        <a href="slaain#0708"><img class=log src="asset/image/logo/discord.png" alt="discord"></a>
        <a href="https://www.linkedin.com/in/idris-ali-b83a03210/"><img class=log src="asset/image/logo/linkdin.png" alt="Linkdin"></a>
        <a href="https://github.com/Slaain?tab=projects&type=beta"><img class=log src="asset/image/logo/github.png" alt="github"> </a>
    </div>
  </div>
  <!----------------------------------------------- Footer ---------------------------------------------->

      <!---------------------------------------------- SCRIPT -------------------------------------------->

      <script src="asset/js/formulairejs.js"></script>
      <script src="asset/js/jquery.js"></script>
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/bootstrap.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>
      <script src="asset/js/popper.js"></script>
      <script src="asset/js/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->

      <!---------------------------------------------- SCRIPT -------------------------------------------->
</body>
</html>