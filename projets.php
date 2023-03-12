<?php


	//PROJET # 1 : TABLES

	echo '<table border>
			
			<tr>
				<th>Nombre</th>
				<th>Carré</th>
				<th>Racine</th>
			</tr>';

		for($i = 1; $i < 11; $i++){
			echo '<tr>
					<td>'.$i.'</td>
					<td>'.$i*$i.'</td>
					<td>'.sqrt($i).'</td>
				</tr>';

			}
	echo '</table>';





	//EXERCICE : LA RACINE D'UNE EQUATION

	function racine($a, $b, $c){

	$delta = $b*$b - (4*$a*$c);

	if($delta < 0){
		echo 'Pas de solution';
	} else if($delta == 0){
		$result = -$b/(2*$a);
		echo "Solution : ".$result;
	} else {
		$racineA = (-$b - sqrt($delta))/(2*$a);
		$racineB = (-$b + sqrt($delta))/(2*$a);
		echo "Deux Solution: x1 = ".$racineA.", x2 = ".$racineB;
	}

	}

	racine(5,7,1);

	



// HEBERGEUR D'IMAGE //////////////////////////////////////////////////////////

	<?php

	if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
		
		$error = 1;


		if($_FILES['image']['size'] <= 3000000){

			$informationImage 	= pathinfo($_FILES['image']['name']);
			$extensionImage 	= $informationImage['extension'];
			$extensionArray		= array('jpg', 'jpeg', 'png', 'gif');


			if(in_array($extensionImage, extensionArray)){

				$address = 'uploads/'.time().rand().rand().$extensionImage;
				move_uploaded_file($_FILES['image']['tmp_name'], $address);

				$error = 0;
			}
		}
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hebergeur d'image</title>
	</head>
	<style type="text/css">
		html, body {margin: 0;}
		header {text-align: center; color: white; background: red;}
		article {margin-top: 50px; background: #f7f7f7;}
		button {margin: auto; margin-top: 10px;}
		#image {max-width: 100px;}
		.contener {width: 1000px; margin: auto;}

	</style>
	<body>

		<header>
			<h2>PHOTOSHOOT</h2>	
		</header>

		<div class="contener">
			<article>
				<h1>Hebergez une image</h1>

				<?php 
					if(isset($error) && $error == 0){

						echo '	<div id="presentation" >
									<img src="'.$address.'" id="image" />
								</div>'
					}

				?>

				<form method="post" action="index.php" enctype="multipart/form-data" />
					<p>
						<input type="file"  required name="image"><br />
						<button type="submit">Hebergez!</button>
					</p>

				</form>
			</article>
		</div>

	</body>
</html>



//---------------------AJOUTER UN UTILISATERU VIA UN FORMULAIRE---------------------------------
<?php

try {

		$bdd 	= new PDO('mysql:host=localhost;dbname=formation_udemy;charset=utf8', 'root', '');	
	
	} catch(Exception $e) {

		die('Erreur : '.$e->getMessage());
	}


	if(isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['serie'])){

			$prenom = $_GET['prenom'];
			$nom 	= $_GET['nom'];
			$serie 	= $_GET['serie'];
			
			$requete = $bdd->prepare('INSERT INTO users(prenom, nom, serie_preferee) VALUES(?, ?, ?)')
											or die(print_r($bdd->errorInfo()));

			$requete->execute(array($prenom, $nom, $serie));
			}

	$requete = $bdd->query('SELECT prenom, nom, serie_preferee FROM users');
	


	echo 	'<table border>
					<tr>
						<th>Prenom</th>
						<th>Nom</th>
						<th>Serie preferee</th>
					</tr>';
					

	while($donnees = $requete->fetch()){

		echo 	'<tr>
					<td>'.$donnees['prenom'].'</td>
					<td>'.$donnees['nom'].'</td>
					<td>'.$donnees['serie_preferee'].'</td>
				</tr>';

	}

	$requete->closeCursor();

	echo 	'</table>';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

	<body>
		<h1>Ajouter un utilisateur</h1>

		<form method="get" action="index.php">
			<table>
				<tr>
					<td>Prenom</td>
					<td><input type="text" name="prenom" /></td>
				</tr>
				<tr>
					<td>Nom</td>
					<td><input type="text" name="nom" /></td>
				</tr>
				<tr>
					<td>Serie preferee</td>
					<td><input type="text" name="serie" /></td>
				</tr>
			</table>
				<button type="submit">Ajouter</button>
			</form>
			
	</body>
</html>

