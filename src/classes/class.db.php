<?php
class Db{
	
	private $options;
	private $db;
	private $sql;
	private $statement;
	private $data;
	
	function __construct($dbms, $host, $port, $dbname, $username, $password) {
		$this -> options = [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
							 PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL ];
		$this -> db = new PDO($dbms . ':host=' . $host
										. ';port=' . $port
										. ';dbname=' . $dbname,
										$username, $password,
										$this -> options);
		$this -> db -> query('SET NAMES utf8');
	}
	
	function selectDb($selection, $where){
		$this -> sql = 'SELECT ' . $selection . ' FROM qf1x_users ' . $where;
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
		$this -> data = $this -> statement -> fetchAll();
		return $this -> data;
	}
	
	function insertDb($data) {
		$this -> sql = 'INSERT INTO qf1x_users (fname, lname, email, uname, pswd, uip) VALUES (?, ?, ?, ?, ?, ?)';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute($data);
}

	function updateDb($selection, $user, $update){
		$this -> sql = 'UPDATE qf1x_users SET '.$selection.'= "'.$update.'" WHERE username = "'.$user.'"';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}
	
	function deleteDb($user){
		$this -> sql = 'DELETE FROM qf1x_users WHERE username = "'.$user.'"';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}
}