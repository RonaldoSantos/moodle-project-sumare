<?php 

	function insert($tablename, $champ, $value) {
		$query = "INSERT INTO ".$tablename." (".$champ.") VALUES (".$value.")";
		return $query;
	}

?>