<?php
 require_once 'detail.php';
     $name = $_POST["name"];
     $email = $_POST["email"];
     $user_id = $_POST["user_id"];
     $password = $_POST["password"];

try {
      //create post
     $post = new Post;
     $post->setName($name);
     $post->setEmail($email);
     $post->setUser_id($user_id);
     $post->setPassword($password);

     //call repo

     $repository = new UserRepository;
     $repository->createConnection();
     $repository->create($post);


} 
catch (Exception $e) {
     echo $e->getMessage();
}
     header("location:login.php");
?>