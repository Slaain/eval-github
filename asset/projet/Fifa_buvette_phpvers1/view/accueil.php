<?php require_once '../connect.php'; ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styleaccueil.css">
	<title><?= $titre; ?></title>

</head>
<body>

	<header>
		   
	</header>

	<hr>
<!-- <div id="load"> -->
	<nav>
		<ul>
		<?= $nav; ?>
	    </ul>
	</nav>

	
	<?php tikTak() ?>
	

	<div class="container">
        <div class="embed-responsive embed-responsive-4by3 " style="height: 65vh;">
            <iframe class="embed-responsive-item corps" src="https://www.eurosport.fr/football/"></iframe>
        </div>
	</div>
<!-- </div> -->

<!-- <img src="../img/fr.png" alt=""> -->
<script src="../ajax.js"></script>
</body>
</html>