<?php 
 function dbg($x){
    echo "<pre>";
    print_r($x);
    echo "</pre><hr>";
 }
 dbg($_POST);
 //creation de variable et associations aux données
$m = htmlspecialchars(($_POST['mail']));
$n = htmlspecialchars(($_POST['nom']));
$a = htmlspecialchars(($_POST['adresse']));
$e = htmlspecialchars(($_POST['entreprise']));
$v = htmlspecialchars(($_POST['ville']));
$u = htmlspecialchars(($_POST['num']));
$s = htmlspecialchars(($_POST['msg']));

//connexion a la BDD
$pdo = new PDO("mysql:host=127.0.0.1:3306;dbname=u833056949_cv","u833056949_slaain13","Vador-sama13127");

// ma requete sql
$sql= "INSERT INTO reception(mail,nom,adresse,entreprise,ville,num,msg) VALUES (?,?,?,?,?,?,?);";

$stmt= $pdo->prepare($sql);
//incrémenter la valeur souhaiter a la place du "?" dans la requete sql préparer
$stmt->bindValue(1,$m,PDO::PARAM_STR);
$stmt->bindValue(2,$n,PDO::PARAM_STR);
$stmt->bindValue(3,$a,PDO::PARAM_STR);
$stmt->bindValue(4,$e,PDO::PARAM_STR);
$stmt->bindValue(5,$v,PDO::PARAM_STR);
$stmt->bindValue(6,$u,PDO::PARAM_STR);
$stmt->bindValue(7,$s,PDO::PARAM_STR);

$stmt->execute();
header("location:../formulaire.php");
