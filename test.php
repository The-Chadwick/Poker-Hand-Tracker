<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

function insertAssociative($table, $data){
$columns = "";
$values = "";

	foreach ($data as $column => $value){
		$columns .= ($columns == "") ? "" : ", ";
		$columns .= $column;
		$values .= ($values =="") ? "" : ", ";
		$values .= $value;
	}

$sql = "INSERT INTO $table ($columns) VALUES ($values)";

return $sql;
}

echo insertAssociative("testTable", array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"));
?>


</body>
</html>