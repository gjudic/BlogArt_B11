<?
	// CRUD ARTICLE

	require_once __DIR__ . '../../CONNECT/database.php';

	class ARTICLE{
		function get_1Article($idArt){


		}

		function get_AllArticles(){


		}

		function create($titrArt, $accrochArt, $dtCreaArt, $nomAuteurArt, $introArt, $ssTitr1Art, $descript1Art, $ssTitr2Art, $descript2Art, $concluArt, $sourcArt, $idThem, $idLang, $idImg){

			try {
          $db->beginTransaction();



					$db->commit();
					$request->closeCursor();
			}
			catch (PDOException $e) {
					$db->rollBack();
					$request->closeCursor();
					die('Erreur insert ARTICLE : ' . $e->getMessage());
			}
		}

		function update($idArt, $titrArt, $accrochArt, $dtCreaArt, $nomAuteurArt, $introArt, $ssTitr1Art, $descript1Art, $ssTitr2Art, $descript2Art, $concluArt, $sourcArt, $idThem, $idLang, $idImg){

			try {
          $db->beginTransaction();



					$db->commit();
					$request->closeCursor();
			}
			catch (PDOException $e) {
					$db->rollBack();
					$request->closeCursor();
					die('Erreur update ARTICLE : ' . $e->getMessage());
			}
		}

		function delete($idArt){

			try {
          $db->beginTransaction();



					$db->commit();
					$request->closeCursor();
			}
			catch (PDOException $e) {
					$db->rollBack();
					$request->closeCursor();
					die('Erreur delete ARTICLE : ' . $e->getMessage());
			}
		}
	}	// End of class
