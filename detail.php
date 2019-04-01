<?php
require_once 'login_data.php';
class UserRepository{
    //instance variable
  	private $con;

  	public function createConnection(){
  		$this->con = new PDO("mysql:host=localhost;dbname=login","root","");
  	}

  	public function create(Post $post)
  	{
  		$query = "INSERT INTO user( name, email, user_id, password) VALUES ( '".$post->getName()."', '". $post->getEmail()."', '".$post->getUser_id()."','".$post->getPassword()."')"; 
      
      try {
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->con->exec($query);
        echo $query;
      } catch(PDOException $e) {
          echo $e->getMessage();
      }
      return true;
  	}

}

 ?>
