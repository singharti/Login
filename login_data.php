<?php 
 class Post{
 	private $name;
 	private $email;
    private $user_id;
    private $password;
    
      // setting methods
    public function setName($name)
    {
       $this->name = $name;
    }
     public function setEmail($email)
    {
       $this->email = $email;
    }
     public function setUser_id($user_id)
    {
       $this->user_id = $user_id;
    }
     public function setPassword($password)
    {
       $this->password = $password;
    }
    
     // getting methods

    public function getName()
    {
       return $this->name ;
    }
     public function getEmail()
    {
        return $this->email ;
    }
     public function getUser_id()
    {
       return $this->user_id;
    }
     public function getPassword()
    {
        return $this->password;
    }
    
 }
 ?>