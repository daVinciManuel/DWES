<?php
require "./db/connect.php";
function userExists($username){
	// consulta cuantos registros hay con el nombre de usuario en {tabla:customers columna:customerNumber	}
	// si devuelve 1 => usuario existe (true). si NO devuelve 1 => usuario n existe (false)
	$exist = false;
	$conn = connect();

	$query = "SELECT count(customerNumber) FROM customers WHERE customerNumber='".$username."';";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchColumn();
	if($result == 1){
		$exist = true;
	}
    $conn = null;
	return $exist;
}
function correctPassword($username,$password){
	$exist = false;
	$conn = connect();

	$query = "SELECT count(customerNumber) FROM customers WHERE customerNumber='".$username."' AND contactLastName='".$password."';";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchColumn();
	if($result == 1){
		$exist = true;
	}
	$conn = null;

	return $exist;
}