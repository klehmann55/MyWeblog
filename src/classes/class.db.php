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

// === USER-DB-FUNCTIONS ===
	
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

	function updateDb($selection, $update, $user){
		$this -> sql = 'UPDATE qf1x_users SET ' . $selection . '= "' . $update . '" WHERE uname = "' . $user . '"';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}
	
	function deleteDb($user){
		$this -> sql = 'DELETE FROM qf1x_users WHERE uname = "' . $user . '"';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}
	
// === BLOG-DB-FUNCTIONS ===
	
	function selectDbBlog(){
		$this -> sql = 'SELECT * FROM qf1x_blog JOIN qf1x_users ON uid = author ORDER BY created DESC;';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
		$this -> data = $this -> statement -> fetchAll();
		return $this -> data;
	}
	
	function insertDbBlog($titel, $content, $author) {
		$this -> sql = 'INSERT INTO qf1x_blog (titel, content, author) VALUES ("' . $titel . '", "' . $content . '", "' . $author . '")';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}

	// function updateDb($selection, $update, $user){
		// $this -> sql = 'UPDATE qf1x_users SET ' . $selection . '= "' . $update . '" WHERE uname = "' . $user . '"';
		// $this -> statement = $this -> db -> prepare($this -> sql);
		// $this -> statement -> execute();
	// }
	
	function deleteDbBlog($uid){
		$this -> sql = 'DELETE FROM qf1x_blog WHERE author = "' . $uid . '"';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}
	
	function deleteDbBlogSingle($uid, $bid){
		$this -> sql = 'DELETE FROM qf1x_blog WHERE author = "' . $uid . '" AND bid= "' . $bid . '"';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}
}