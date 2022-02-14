<?
// CRUD MOTCLE

require_once __DIR__ . '../../CONNECT/database.php';

class MOTCLE{
	function get_1MotCle($numMotCle){


	}

	function get_1MotCleByLang($numMotCle){


	}

	function get_AllMotCles(){


	}

	function get_AllMotsClesByLang(){


	}

	function get_NbAllMotsClesBynumLang($numLang){


	}

	function create($libMotCle, $numLang){

    try {
        $db->beginTransaction();



				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur insert MOTCLE : ' . $e->getMessage());
		}
	}

	function update($numMotCle, $libMotCle, $numLang){

    try {
        $db->beginTransaction();




				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur update MOTCLE : ' . $e->getMessage());
		}
	}

	function delete($numMotCle){

    try {
        $db->beginTransaction();




				$db->commit();
				$request->closeCursor();

		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur delete MOTCLE : ' . $e->getMessage());
		}
	}
}	// End of class
