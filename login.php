<html>
  <title>Login</title>
  <body background="1.jpg" style="background-size: 1500px 650px;">
  	<div style="margin-top: 150px;margin-left: 500px; margin-right:450px; background: pink; height: 250px;">
  		<h2 style="margin-left: 150px;">Login</h2>
        <form action="user.php" method="post">
           <b style="margin-left: 20px;"> User id </b>
           <input type="text"name="text1" required="" style="margin-left: 60px;"><br><br><br>
           <b style="margin-left: 20px;"> Password </b>
           <input type="password" required="" style="margin-left: 45px;"><br><br><br>
           <input type="submit" value="login" style="margin-left: 150px;"><br><br>&nbsp;
           <a href="forget.php" style="margin-left: 150px;">Forget Password </a>&nbsp;&nbsp;
           <a href="registration.php">Registration</a>
      </form>
   </div>
  </body>
</html>