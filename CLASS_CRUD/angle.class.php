<?
// CRUD ANGLE

require_once __DIR__ . '../../CONNECT/database.php';

class ANGLE{
	function get_1Angle($numAngl){


	}

	function get_1AngleByLang($numAngl){


	}

	function get_AllAngles(){


	}

	function get_AllAnglesByLang(){


	}

	function get_NbAllAnglesBynumLang($numLang){


	}

	function create($numAngl, $libAngl, $numLang){

		try {
        $db->beginTransaction();



				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur insert ANGLE : ' . $e->getMessage());
		}
	}

	function update($numAngl, $libAngl, $numLang){

		try {
        $db->beginTransaction();



				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur update ANGLE : ' . $e->getMessage());
		}
	}

	function delete($numAngl){

		try {
        $db->beginTransaction();



				$db->commit();
				$request->closeCursor();
				return($count);
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur delete ANGLE : ' . $e->getMessage());
		}
	}
}		// End of class
