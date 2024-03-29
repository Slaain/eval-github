<?php
function dbg ($z){
    echo '<pre>';
    print_r($z);
    //afficher la valeur d'une variable+sont type 
    echo '</pre>';
}
dbg($_GET);

$Id_responsable=$_GET['chat'];
echo $Id_responsable ;


$pdo=new PDO("mysql:host=localhost;dbname=fifaversdeux","root","");

$sql="DELETE FROM responsable WHERE Id_responsable = ?" ;

$stmt=$pdo->prepare($sql);

$stmt->bindValue(1,$Id_responsable,PDO::PARAM_INT);
$stmt->execute();
$Id_responsable=$_GET['chat'];

 echo $Id_responsable;
//  header("location:driver.php");
?>