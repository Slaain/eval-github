<?php


function dbg($x){
    echo '<pre>' ;
    print_r($x);
    echo '<hr></pre>' ;

}
$titre='Accueil' ;

$nav='<li><a href="accueil.php">Accueil</a></li>
<li><a href="">Statistiques</a></li>
<li><a href="recherchemembres.php">Recherche Membres</a></li>
<li><a href="">Calendrier</a></li>
<li><a href="">Statistiques</a></li>
<li><a href="">Admin</a></li>';
// <li><a onclick=tikTok("recherchemembres.php")>Recherche Membres</a></li>
$user='root';
$pass='';
?>
<html>
<!-- <div id="load"> -->
    <?php
function tikTak(){

    $user='root';
    $pass='';
    $db=new PDO('mysql:host=localhost;dbname=fifaversdeux',$user,$pass);
    $db2=$db->prepare('SELECT*FROM equipe');
    $db2->execute();

    $f=$db2->fetchAll(PDO::FETCH_ASSOC);
    define("NDE","Nom des equipes");
    define("RES","Résultat");
    define("DPX","Drapeaux");

    $theade=[NDE,DPX,RES];
    echo'<table>';

    for ($i=0; $i < count($theade) ; $i++) { 
        echo '<th>'.$theade[$i].'</th>';
        
     }
    foreach ($f as $key => $value) {

    
           echo'<tr><td>'.$value['pays'].'</td>';
            echo'<td><img class="image"src="'.$value['drapeaux'].'"></td></tr>';

    }


    echo'</table>';
  }
  ?>
  <!-- </div> -->
  <script src="../ajax.js"></script>
  </html>