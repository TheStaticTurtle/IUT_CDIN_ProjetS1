<?php
session_start();
include("vars.php"); 
$page=2;

if(isset($_POST["player"])) {
	$id = $_POST["player"];
	$_SESSION["POS_".$page] = $id;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"/>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Getion équipe</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Gardient</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Defenseur</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Milieu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Attackant</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container" style="margin-top: 1%">
		<div class="row">
			<div class="col">
				<button type="button" class="btn btn-danger">Remise a zero</button>
				<ul style="margin-top: 3%">
					<li> <b>Equipe actuelle</b> </li>

					<?php
						foreach ($posList as $key => $value) {
							if(isset($_SESSION["POS_".$key])) { 
								echo "<li>" . $value . ": " . $players[$_SESSION["POS_".$key]]["nom"] . " " . $players[$_SESSION["POS_".$key]]["prenom"] ." </li>";
							}
						}
					?>

				</ul>
			</div>
			<div class="col-6">
				<table style="margin-top: 3%" class="table">
					<thead>
						<tr>
							<th scope="col">Prenom</th>
							<th scope="col">Nom</th>
							<th scope="col">Numero</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($players as $key => $player) { 
							if ($player["poste"] == $posList[$page]) { ?>
							<tr>
								<td><?php echo $player["nom"] ?></td>
								<td><?php echo $player["prenom"] ?></td>
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
</body>
</html>