<?
// CRUD STATUT (ETUD)

require_once __DIR__ . '../../CONNECT/database.php';

class STATUT{
	function get_1Statut($idStat){


	}

	function get_AllStatuts(){


	}

	function create($libStat){

		try {
        $db->beginTransaction();



				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur insert STATUT : ' . $e->getMessage());
		}
	}

	function update($idStat, $libStat){

    try {
        $db->beginTransaction();



				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur update STATUT : ' . $e->getMessage());
		}
	}

	function delete($idStat){

    try {
        $db->beginTransaction();



				$db->commit();
				$request->closeCursor();

		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur delete STATUT : ' . $e->getMessage());
		}
	}

}	// End of class
