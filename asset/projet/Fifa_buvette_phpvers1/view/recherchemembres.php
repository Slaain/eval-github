<?php require_once '../connect2.php'; ?>
<?php
function dbg ($z){
    // echo '<pre>';
    // print_r($z);
    //afficher la valeur d'une variable+sont type 
    // echo '</pre>';
}
//création de notre instance objet de connexion 
$pdo=new PDO("mysql:host=localhost;dbname=fifaversdeux","root","");

dbg($pdo);
//notre premiere requete d'affichage 
$sql="select * from responsable";

//dans un premier temps sans requete preparé (sans prepand etc..): de manière 0
// $stmt=$pdo->query($sql);

// $lignes=$stmt->fetchAll(PDO::FETCH_ASSOC);

// dbg($lignes);

//une maniere avec prepare et execute
$res=$pdo->prepare($sql);
dbg($res);
$x=$res->execute();
dbg($x);
?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/stylerecherche.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- <script src="../ajax.js"></script> -->

	<title><?= $titre; ?></title>

</head>
<body>
    
<header>
		   <img src="../img/fifalogo2.png" alt="fifa" style="width: 32pximp !important;">
	</header>

<nav>
		<ul>
		<?= $nav; ?>
	    </ul>
	</nav>

	<hr>


	<form action="add.php" method="GET" enctype="multipart/form-data">

        nom:<input type="text" name="nom" placeholder="nom"  required><br>
        Prenom:<input type="text" id="pass" name="prenom" placeholder="prenom" required> <br>
        age:<input type="text" name="age" placeholder="age"  required><br>
        dernière nom de buvette responsable:<input type="text" id="buvette" name="buvette" placeholder="buvette" required> <br>
        <button type="submit">ajouter</button>

</form>
<hr>
    <table border="1px" width="100%">
        <thead>
            <tr>
                    <th>Nom</th>
                    <th>prenom</th>
                    <th>Age</th>
                    <th>dernière nom de buvette responsable</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($res as $x): ?>
        
        
            <tr>

                <td><?php echo $x['nom']  ;?></td>
                <td><?php echo $x['responsable']  ;?> </td>
                <td><?php echo $x['prenom']  ;?> </td>
                <td><?php echo $x['buvette']  ;?> </td>
                <td><a href="../supp.php?chat=<?=$x['Id_responsable']; ?>">Supp</a></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Rentrez vos dernières missions pour une meilleure organisation et de nouvelles disponibilités</h1>
        <p class="lead">Pour une organisation et structure accessible a tous.</p>
      </div>
    </div>
<!-- <img src="../img/fr.png" alt=""> -->
<script src="../ajax.js"></script>
<script src="../boostrap.js"></script>
</body>
</html>