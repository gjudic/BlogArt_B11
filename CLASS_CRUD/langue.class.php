<?
	// CRUD LANGUE (ETUD)

	require_once __DIR__ . '../../CONNECT/database.php';

	class LANGUE{
		function get_1Langue($numLang){


		}

		function get_1LangueByPays($numLang){


		}

		function get_AllLangues(){


		}

		function get_AllLanguesByPays(){


		}

		function create($numLang, $lib1Lang, $lib2Lang, $numPays){

			try {
          $db->beginTransaction();



					$db->commit();
					$request->closeCursor();
			}
			catch (PDOException $e) {
					$db->rollBack();
					$request->closeCursor();
					die('Erreur insert LANGUE : ' . $e->getMessage());
			}
		}

		function update($numLang, $lib1Lang, $lib2Lang, $numPays){

			try {
          $db->beginTransaction();



					$db->commit();
					$request->closeCursor();
			}
			catch (PDOException $e) {
					$db->rollBack();
					$request->closeCursor();
					die('Erreur update LANGUE : ' . $e->getMessage());
			}
		}

		// Ctrl FK sur THEMATIQUE, ANGLE, MOTCLE avec del
		function delete($numLang){

			try {
          $db->beginTransaction();



					$db->commit();
					$request->closeCursor();

			}
			catch (PDOException $e) {
					$db->rollBack();
					$request->closeCursor();
					die('Erreur delete LANGUE : ' . $e->getMessage());
			}
		}
	}	// End of class
