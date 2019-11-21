<?php
session_start();
include("vars.php"); 

if(isset($_POST["raz"])) {
	foreach ($posList as $key => $value) {
		if(isset($_SESSION["POS_".$key])) { 
			unset($_SESSION["POS_".$key]);
		}
	}
}

if(isset($_POST["player"])) {
	$id = $_POST["player"];
	$_SESSION["POS_".$PagePos] = $id;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestion équipe</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		body {font-size:3rem;}
		h1 {font-size:5.5rem;}
		button {font-size: 3rem !important }
		a {font-size: 3rem !important;}
		.linkNav {font-size: 2rem !important}

		/* Medium devices (tablets, 768px and up)*/
		@media (min-width: 600px) {  
			body {font-size:1rem;} /*1rem = 16px*/
			h1 {font-size:3rem;} /*1rem = 16px*/
			button {font-size: 1rem !important}
			a {	font-size: 1.5rem !important; }
			.linkNav {font-size: 1rem !important}
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Gestion équipe</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span>Menu</span>
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link linkNav" href="gardien.php">Gardien</a>
				</li>
				<li class="nav-item">
					<a class="nav-link linkNav" href="defenseur.php">Defenseur</a>
				</li>
				<li class="nav-item">
					<a class="nav-link linkNav" href="milieu.php">Milieu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link linkNav" href="attaquant.php">Attaquant</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container" style="margin-top: 1%">
		<div class="row" style="margin-top: 3%;">
			<div class="col-lg">
				<h1>Equipe actuelle</h1>
				<ul style="margin-top: 5%;">
					<?php
						$isALeastOne = false;
						foreach ($posList as $key => $value) {
							if(isset($_SESSION["POS_".$key])) { 
								echo "<li>" . $value . ": " . $players[$_SESSION["POS_".$key]]["prenom"] . " " . $players[$_SESSION["POS_".$key]]["nom"] ." </li>";
								$isALeastOne = true;
							}
						}
						if(!$isALeastOne) {
							echo "<p> L'equipe est vide </p>";
						}
					?>
				</ul>
				<?php if($isALeastOne) { ?>
					<form method="post"><button class="btn btn-danger" type="submit" name="raz" value="RAZ">RAZ</button></form>	
				<?php } ?>
				
			</div>
			<div class="col-lg">
				<h1>Ajouter un <?php echo $posList[$PagePos]; ?> </h1>
				<table style="margin-top: 5%" class="table">
					<thead>
						<tr>
							<th scope="col">Prénom</th>
							<th scope="col">Nom</th>
							<th scope="col">Numéro</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($players as $key => $player) { 
							if ($player["poste"] == $posList[$PagePos]) { ?>
							<tr>
								<td><?php echo $player["prenom"] ?></td>
								<td><?php echo $player["nom"] ?></td>
								<td><?php echo $key ?></td>
								<td><form method="post"><button class="btn btn-success" type="submit" name="player" value="<?php echo $key; ?>">Ajouter</button></form></td>
							</tr>
							<?php }
						} ?>
					</tbody>
				</table>
			<div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>