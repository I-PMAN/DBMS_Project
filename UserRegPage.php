<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles.css">
  <head>
    <title>Movie and Chill</title>
  </head>
  <body>
  <div class="left">  
	<form action="UserRegQ.php" method="POST" class="inputform">
  <img src="laptop-user.png"><br></br>
  <input type="text" id="fullname" name="fullname" placeholder="fullname" required/><br></br>
  <input type="text" id="username" name="username" placeholder="username" required/><br><br>
  <input type="password" id="password" name="password" placeholder="password" required/><br><br>
  <input type="number" id="phone" name="phone" placeholder="phone" required/><br></br>
  <input type="email" id="email" name="email" placeholder="email" required/><br></br>

   <input type="submit" value="Register"/>
  </form>
</div>
<div class="right">
<form action="UserLogPage.php" class="inputform">
<p>Already an user?</p>
<input type="submit" value="Login">
</form>
</div>

</body>
</html>
