<?php

$dbname = "pokerhands";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "password";

$con = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error($con));
mysql_select_db($dbname) or die(mysql_error($con));

function sanitizeString($var){
	if(get_magic_quotes_gpc()) $var = stripslashes($var);
	$var = htmlentities($var);
	$var = strip_tags($var);
	
	return $var;
}

function sanitizeSQL($var){
	$var = mysql_real_escape_string($var);
	$var = sanitizeString($var);
	
	return $var;
}

function createTable($table, $data){
	$sql = "CREATE TABLE IF NOT EXISTS $table($data)";
	mysql_query($sql) or die(mysql_error());
	
	return TRUE;
}

function select($table, $where){
	$where = sanitizeSQL($where);
	$sql = "SELECT * FROM $table WHERE $where";
	$result = mysql_query($sql) or die(mysql_error());
	
	return $result;
}

function insertAssociative($table, $data){
	$columns = "";
	$values = "";

	foreach ($data as $column => $value){
		$columns .= ($columns == "") ? "" : ", ";
		$columns .= "`" . $column . "`";
		$values .= ($values =="") ? "" : ", ";
		$values .= "'" . $value ."'";
	}
	
	$sql = "INSERT INTO $table ($columns) VALUES ($values)";
	echo $sql;
	mysql_query($sql) or die(mysql_error());
	
	return TRUE;
}

function destroySession(){
	$_SESSION=array();
	
	if (session_id() != "" || isset($_COOKIE[session_name()])) setcookie(session_name(), '', time()-259200, '/');
	
	session_destroy();
}

?>