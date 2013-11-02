<?php 

	function update($tablename, $update ,$condition="") {
		$query = "UPDATE ".$tablename." SET ".$update." WHERE ".$condition;
		return $query;
	}

?>