<?php
class User {

/*
public $firstname;
public $lastname;
public $email;
public $username;
*/

private $firstname;
private $lastname;
private $email;
private $username;
private $password;

function __construct($firstname, $lastname, $email, $username, $password) {
	$this -> firstname = $firstname;
	$this -> lastname = $lastname;
	$this -> email = $email;
	$this -> username = $username;
	$this -> password = $password;
}
	
function setFirstName($firstname) {
	$this -> firstname = $firstname;
}
function setLastName($lastname) {
	$this -> lastname = $lastname;
}
function setEMail($email) {
	$this -> email = $email;
}
function setUserName($username) {
	$this -> username = $username;
}
function setPassword($password) {
	$this -> password = $password;
}
function getFirstName() {
	return $this -> firstname;
}
function getLastName() {
	return $this -> lastname;
}
function getEMail() {
	return $this -> email;
}
function getUserName() {
	return $this -> username;
}
function getPassword($password) {
	return $this -> password;
}

// function __destruct() 	{ echo 'The End'; 	}
}