<?
// CRUD LIKECOM

require_once __DIR__ . '../../CONNECT/database.php';

class LIKECOM{
	function create($numMemb, $numSeqCom, $numArt, $likeC){

    try {
        $db->beginTransaction();





				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur insert LIKECOM : ' . $e->getMessage());
		}
	}

	function update($numMemb, $numSeqCom, $numArt, $likeC){

		try {
        $db->beginTransaction();





				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur update LIKECOM : ' . $e->getMessage());
		}
	}
}	// End of class
