<?
///////////////////////////////////////////////////////
//
//  CRUD STATUT (PDO) -  Modifié - 23 Janvier 2021
//
//  Script  : statut.php  (ETUD)   -   BLOGART21
//
///////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';

    // controle des saisies du formulaire


    // insertion classe STATUT




?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Gestion du Statut</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <style type="text/css">
        .error {
            padding: 2px;
            border: solid 0px black;
            color: red;
            font-style: italic;
            border-radius: 5px;
        }
    </style>
</head>
<body>
	<h1>BLOGART21 Admin - Gestion du CRUD Statut</h1>

	<hr /><br />
	<h2>Nouveau statut :&nbsp;<a href="./createStatut.php"><i>Créer un statut</i></a></h2>
	<br /><hr />
	<h2>Tous les statuts</h2>

	<table border="3" bgcolor="aliceblue">
    <thead>
        <tr>
            <th>&nbsp;Numéro&nbsp;</th>
            <th>&nbsp;Nom&nbsp;</th>
            <th colspan="2">&nbsp;Action&nbsp;</th>
        </tr>
    </thead>
    <tbody>
<?
	// Appel méthode : tous les statuts en BDD

    // Boucle pour afficher
	//foreach($all as $row) {
?>
        <tr>
		<td><h4>&nbsp; <? echo "ici idStat"; ?> &nbsp;</h4></td>

        <td>&nbsp; <? echo "ici libStat"; ?> &nbsp;</td>

		<td>&nbsp;<a href="./updateStatut.php?id=<?=1 ?>"><i>Modifier</i></a>&nbsp;
		<br /></td>
		<td>&nbsp;<a href="./deleteStatut.php?id=<?=1 ?>"><i>Supprimer</i></a>&nbsp;
		<br /></td>
        </tr>
<?
	//}	// End of foreach
?>
    </tbody>
    </table>
    <br><br>
<?
require_once __DIR__ . '/footer.php';
?>
</body>
</html>
