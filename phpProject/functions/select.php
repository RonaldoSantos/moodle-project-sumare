<?php

	function select($tablename, $champ, $condition="", $tri="") {

		if($condition != "") {
			$query = "SELECT ".$champ." FROM ".$tablename." WHERE ".$condition." ".$tri;
		} else {
			$query = "SELECT ".$champ." FROM ".$tablename." ".$tri;
		}

		//echo $query."<br/>";
		return $query;
	}

?>