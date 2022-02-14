<?
// CRUD COMMENT

require_once __DIR__ . '../../CONNECT/database.php';

class COMMENT{
	function get_1Comment($numSeqCom, $numArt){


	}

	function get_AllCommentsByidArt($numArt){


	}

	// comment en attente : Moderation affComOK à FALSE
	function create($numSeqCom, $numArt, $dtCreCom, $libCom, $attModOK, $affComOK, $notifComKOAff){

    try {
        $db->beginTransaction();


				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur insert COMMENT : ' . $e->getMessage());
		}
	}

 		// Moderation : TRUE si comment affiché, FALSE sinon
 		// et remarques possibles admin si non affiché
	function update($numSeqCom, $numArt, $attModOK, $affComOK, $notifComKOAff){

    try {
        $db->beginTransaction();


				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur update COMMENT : ' . $e->getMessage());
		}
	}

	// A priori : del comment impossible (sauf si choix admin après modération)
	function delete($numSeqCom, $numArt){

    try {
        $db->beginTransaction();


				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur delete COMMENT : ' . $e->getMessage());
		}
	}
}	// End of class
