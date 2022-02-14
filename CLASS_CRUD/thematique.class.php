<?
// CRUD THEMATIQUE

require_once __DIR__ . '../../CONNECT/database.php';

class THEMATIQUE{
	function get_1Thematique($numThem){


	}

	function get_1ThematiqueByLang($numThem){


	}

	function get_AllThematiques(){


	}

	function get_AllThematiquesByLang(){


	}

	function get_NbAllThematiquesBynumLang($numLang){


	}

	function create($numThem, $libThem, $numLang){

		try {
        $db->beginTransaction();



				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur insert THEMATIQUE : ' . $e->getMessage());
		}
	}

	function update($numThem, $libThem, $numLang){

		try {
        $db->beginTransaction();




				$db->commit();
				$request->closeCursor();
		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur update THEMATIQUE : ' . $e->getMessage());
		}
	}

	function delete($numThem){

		try {
        $db->beginTransaction();




				$db->commit();
				$request->closeCursor();

		}
		catch (PDOException $e) {
				$db->rollBack();
				$request->closeCursor();
				die('Erreur delete THEMATIQUE : ' . $e->getMessage());
		}
	}
}		// End of class
