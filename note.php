<?php
	echo "Hello World!";

	//VARIABLES
	
	$ageDuLyceen 	= 18; //INT
	$ageDuLyceen 	= 18.5; //FLOAT
	$ageDuLyceen 	= "18"; //STRING
	$ageDuLyceen 	= "\"18\""; //STRING AVEC ""
	$estMajeur		= false; // BOOLEEN
	echo $ageDuLyceen;

	//CONCATENATION DE VARIABLES

	$direBonjour = "Hello";
	$destination = "World";

	echo $direBonjour.' '.$destination;

	//OPERATEURS

	$premierNombre = 5;
	$deuxiemeNombre = 25;
	$operationCalcul = ((5*5)/5)+128;

	echo $premierNombre * $deuxiemeNombre;

	//LES TABLEAUX
	$identitePersonneA = array(
		'id' 		=> 15,
		'prenom' 	=> 'Melanie',
		'nom' 		=> 'Dupont',
		'age' 		=> 20
	);

	echo 'Bonjour '.$identitePersonneA['prenom'].' !';

	//TABLEAU SANS CLE
	$identitePersonneA = array(15, 'Nicolas', 'Dupont', 20);
	echo $identitePersonneA[1];

	<?php

	//EXERCICE PREMIERE PARTIE
	$monTableau = array(
		'id' 		=> 2,
		'prenom' 	=> 'Marie',
		'nom'		=> 'Martin',
		'age'		=> 25
	);

	$ageDans50Ans = $monTableau['age'] + 50;
	echo "Bonjour ".$monTableau['prenom'].' '.$monTableau['nom'].' ! Dans 50 ans vous aurez '.$ageDans50Ans.' ans .';

	//CONDITION : IF

	$age = 18;

	if($age >= 18) {
		echo "Vous etes majeur.";
	} 

	if($age < 18) {
		echo "Vous etes mineur";
	}

	// LES CONDITIONS TERNAIRES

	//(CONDITIONS) ? TRUE : FALSE;
	$number = 10;
	echo($number%10 == 0) ? "vrai" : "faux";

	//IF ELSE
	$age = 18;

	if($age > 18){
		echo "Vous etes majeur";
	} else if ($age == 18) {
		echo "Vous etes enfin majeur";
	} else {
		echo "Vous etes mineur";
	}
		
	//SWITCH

	$note = 20;

	switch($note)
	{
		case 0:
			echo ' Vous etes vraiment nul';
		break;

		default:
		
	}

	// BOUCLES : WHILE
	
	$ligne = 0;

	while($ligne < 10){
		echo 'Voici la ligne: '.($ligne+1).' <br />';
		$ligne++;
	}

	// BOUCLES : FOR

	for($i = 0; $i < 10; $i++){
		echo 'Voici le numero de la ligne: '.($i+1).'<br />';
	}

	$user = array('Nicolas', 'Marie', 'Lola', 'Elon', 'Jo');

	for($i = 0; $i < 5; $i++){
		echo $user[$i].'<br />';
	}

	//BOUCLES : FOREACH (TABLEAUX)
	// AFFICHE L'ENSEMBLE DU TABLEAU

	$user = array('Nicolas', 'Marie', 'Lola', 'Elon', 'Jo');

	foreach ($user as $name) {
		echo $name.'<br />';
	}

		//BOUCLES : DOWHILE

	$x = 0;
	do {
		echo "Le nombre est egal : ".$x."<br />";
		$x++;
	} while($x < 10);


		//LES FONCTIONS
	function Hello($prenom){
		echo'Hello '.$prenom.'<br />';
	}

	Hello("Marie");

	

		//LES BOUCLES IMBRIQUEES


	echo '<table border style="border-collapse: collapse;">
		<tr>
			<th></th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			<th>9</th>
			<th>10</th>
		</tr>';

	for($i = 1; $i <= 10; $i++){
		echo '<tr><th>'.$i.'</th>';
	for($j = 1; $j <= 10; $j++){
		echo '<td>'.$i*$j.'</td>';
		}
		echo '</tr>';
	}

	
		//LES FONCTIONS
		function Formule($x, $y) {
			$temp = $x * $y;
			$temp /= 5;
			$temp = $x + $temp -($x +$y);

			return $temp;
		}

		$resultat = Formule(52, 74);
		echo $resultat;




		//FONTION EN PHP NATIVES

		//STRING

	$string = "Bienvenue sur la formation en PHP et MySQL";

	//STRLEN: Nombre de caractere dans la chaine
	echo 'Nombre de caractères : '.strlen($string).'<br />';

	//STR_REPLACE: Remplace des caracteres dans la chaine
	echo 'La string transformée : '.str_replace('Bienvenue', 'Welcome', $string).'<br />';

	//STRTOLOWER: Met l'ensemble de la chaine en minuscule
	//STRTOUPPER: Met l'ensemble de la chaine en majuscule
	echo strtolower($string);
	echo strtoupper($string);

	//SUBSTR: Coupe la chaine à partir d'un index jusqu'a un nombre de caracteres données 
	echo substr($string, 0, 9);


		//MATH

	//abs : valeur absolue (=positif de son nombre)
	echo abs(82);

	//max : retourne la plus grande valeur
	//min : retourne la plus petite valeur
	echo max(3,7,30,51,6,83);

	//rand : genere un nombre aleatoire
	echo rand(0, 100);

	//round : arrondir un nombre 
	echo round(23.87639);


		//TABLEAUX

	$array = array('Gens', 'Personne', 'Kevin');

	//array_flip: permuter un tableau
	$array_two = array_flip($array);
	echo $array_two['Gens'];

	//array_key_exists: chercher si un index exists
	if(array_key_exists(0, $array)){
		echo'Yes';
	}

	//count: compte le nombre d'item qu'il y a dans un tableau
	echo count($array);

	//sort
	sort($array);
	foreach ($array as $name) {
		echo $name.'<br />';
	}

	

		// FORMULAIRE

	if(isset($_POST['prenom']) && isset($_POST['nom'])){

		$prenom = htmlspecialchars($_POST['prenom']);
		$nom 	= htmlspecialchars($_POST['nom']);
		/*htmlspecialchars(): method qui permet d'empecher l'utilisateur d'entrer du code indesirable dans notre formulaire.
		Faire tres attention aux faille XSS / injection SQL!! */

		echo'Bonjour '.$_POST['prenom'].' '.$_POST['nom'].' !';
	}

	echo 	'<form method="post" action="index.php">
				<p>
					<table>
						<tr>
							<td>Prenom</td>
							<td><input type="text" name="prenom" /></td>
						</tr>
						<tr>
							<td>Nom</td>
							<td><input type="text" name="nom" /></td>
						</tr>
					</table>
					<button type="submit">Envoyer</button>

				</p>

			</form>';





		//ENVOI FICHIER PHP

			if (isset($_FILES['image']) && $_FILES['image']['error'] == 0){

					if ($_FILES['image']['size'] <= 3000000){

						$informationsImage 	= pathinfo($_FILES['image']['name']);
						$extensionImage		= $informationsImage['extension'];
						$extensionArray 	= array('png', 'gif', 'jpg', 'jpeg');

							if (in_array($extensionImage, $extensionArray)){

								move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.time().basename($_FILES['image']['name']));
								echo 'Envoi reussi';
							}
					}

			}

			echo'<form method="post" action="index.php" enctype="multipart/form-data">
					<p>
						<h1>Formulaire</h1>
						<input type="file" name="image"/><br />
						<button type="submit">Envoyer</button>
					</p>
				</form>';

				// $_FILES['image']['name'] 		// NOM
				// $_FILES['image']['type'] 		// TYPE
				// $_FILES['image']['size'] 		// TAILLE
				// $_FILES['image']['tmp_name']	// EMPLACEMENT
				// $_FILES['image']['error']		// ERREUR




				
	
	//COMMUNIQUER AVEC LA BASE DE DONNEES

	try {

		$bdd 	= new PDO('mysql:host=localhost;dbname=formation_udemy;charset=utf8', 'root', '');	
	
	} catch(Exception $e) {

		die('Erreur : '.$e->getMessage());
	}

	$requete = $bdd->exec('INSERT INTO jobs(id_user, metier) VALUES(3, "Programmeuur")');
	//AJOUTER UN UTILISATEUR
	//$requete = $bdd->exec('INSERT INTO users(prenom, nom, serie_preferee) VALUES("Mark", "Zuckerberg", "Koh-Lanta")')
	//									or die(print_r($bdd->errorInfo()));


	//MODIFIER UN UTILISATEUR
	//$requete = $bdd->exec('UPDATE users SET serie_preferee = "Le rouge et le noir" WHERE prenom="Alain"');
	
	//SUPPRIMER UN UTILISATEUR
	//$requete = $bdd->exec('DELETE FROM users WHERE prenom ="Mark"');


	// $requete = $bdd->query('SELECT prenom, nom, serie_preferee, metier
	// 						FROM users, jobs
	// 						WHERE users.id = jobs.id_user ');


	//$requete = $bdd->query('SELECT * 
	//						FROM users ');
							/*WHERE prenom = "Alain"*/ //afiche uniquement les propriétés d'Alain
							/*ORDER BY id DESC */ //affiche en ordre inversé, s'utilise apres le Where
							/*LIMIT 0 ,2*/ // AFFICHE 2 DONNEES A PARTIR DE 0, s'utilise apres le Order By


	//JOINTURE INTERNE
	$requete = $bdd->query('SELECT prenom, nom, serie_preferee, metier 
																	FROM users
																	INNER JOIN jobs
																	ON users.id = jobs.id_user');


	echo 	'<table border>
					<tr>
						<th>Prenom</th>
						<th>Nom</th>
						<th>Serie preferee</th>
						<th>Metier</th>
					</tr>';
					

	while($donnees = $requete->fetch()){

		echo 	'<tr>
					<td>'.$donnees['prenom'].'</td>
					<td>'.$donnees['nom'].'</td>
					<td>'.$donnees['serie_preferee'].'</td>
					<td>'.$donnees['metier'].'</td>
				</tr>';

	}

	$requete->closeCursor();

	echo 	'</table>';

		
//SESSION && COOKIES---------------------------------------
<?php
session_start();


	if(!empty($_POST['pseudo'])){

		$pseudo = $_POST['pseudo'];

		$_SESSION['pseudo'] = $pseudo;
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP</title>
	</head>

	<body>
		<h1>Entrez votre pseudo</h1>

		<form method="post" action="index.php">
			<table>
				<tr>
					<td>Pseudo</td>
					<td><input type="text" name="pseudo" /></td>
				</tr>
			</table>
				<button type="submit">Se connecter</button>
			</form>
			
			<?php
			if(!empty($_SESSION['pseudo'])){
				echo'<h2>Bienvenue '.htmlspecialchars($_SESSION['pseudo']).'</h2>';
			}
			?>
	</body>
</html>

?>

?>

//TYPES SCALAIRES
booleen
integer (number)
float (nombre à virgule)
string
//TYPES COMPOSES
array
object
callable
iterable
//TYPES SPECIAUX
resource
NULL

// AND = &&
// OR = ||
