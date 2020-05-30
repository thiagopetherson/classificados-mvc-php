<?php

namespace Models;

use \Models\Model;

class Categorias extends Model {

	public function getLista() {
		$array = array();
	

		$sql = $this->db->query("SELECT * FROM categorias");
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

}
?>