<?php 

	function delete($tablename, $condition) {
		$query = "DELETE FROM ".$tablename." WHERE ".$condition;

		echo $query.'<br>';
		//return $query;
	}

?>