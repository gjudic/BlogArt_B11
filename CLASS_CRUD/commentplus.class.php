<?
// CRUD COMMENTPLUS

require_once __DIR__ . '../../CONNECT/database.php';

class COMMENTPLUS{
	function create($numSeqCom, $numArt, $numSeqComR, $numArtR){

    try {
        $db->beginTransaction();


				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur insert COMMENTPLUS : ' . $e->getMessage());
		}
	}
}	// End of class
