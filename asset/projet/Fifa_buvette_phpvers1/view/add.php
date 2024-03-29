<?php

function dbg ($z){
    echo '<pre>';
    print_r($z);
    //afficher la valeur d'une variable+sont type 
    echo '</pre>';
}
dbg($_GET);

//recuperzation des  valeurs du tableau associatif
// $temp=$_FILES['NDPR']['tmp_name'];
// move_uploaded_file($temp,"img/".$_FILES['photo']['name']);
$n=$_GET['nom'];
$e=$_GET['age'];
$m=$_GET['prenom'];
$p=$_GET['buvette'];

echo "les valeurs transmisent via lurl sont : <br>   ".$n."<br>".$e."<br>".$m."<br>".$p."<br>";


//avec la preparation de la requete 7
$pdo=new PDO("mysql:host=localhost;dbname=fifaversdeux","root","");

$sql="INSERT INTO `responsable` (`responsable`, `nom`, `prenom`,`buvette`) VALUES (?, ?,?,?)" ;

$stmt=$pdo->prepare($sql);

$stmt->bindValue(1,$n,PDO::PARAM_STR);
$stmt->bindValue(2,$e,PDO::PARAM_STR);
$stmt->bindValue(3,$m,PDO::PARAM_STR);
$stmt->bindValue(4,$p,PDO::PARAM_STR);
$stmt->execute();


//header('location:recherchemembres.php');
?>