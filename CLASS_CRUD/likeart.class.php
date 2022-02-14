<?
// CRUD LIKEART

require_once __DIR__ . '../../CONNECT/database.php';

class LIKEART{
	function create($numMemb, $numdArt, $likeA){

    try {
        $db->beginTransaction();




				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur insert LIKEART : ' . $e->getMessage());
		}
	}

	function update($numMemb, $numdArt, $likeA){

		try {
        $db->beginTransaction();




				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur update LIKEART : ' . $e->getMessage());
		}
	}
}	// End of class
