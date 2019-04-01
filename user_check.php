<?php
if (!isset($_POST["email"]) && !isset($_POST["password"] )) {
	header("location:login.php");
}
    require_once 'detail.php';
    $repository = new UserRepository;
    $repository->createConnection;
    $email = $_POST['user_id'];
    $password = sha1($_POST['password']);
    $query = $con->prepare("SELECT * FROM  user where user_id=? and password=?");

   $query->bind_param("ss", $email, $password);

   $query->execute();

   $query->bind_result($id, $name, $mail, $pass);
   $query->fetch();
 if (!isset($user_id) && !isset($password)) {
 	header("location:login.php?log=wrong");

 }
 else{
   session_start();
 	$_SESSION["user_id"] = "Arti" .$id;
 	header("location:user.php");
 }

?>