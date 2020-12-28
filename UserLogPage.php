<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles.css">
  <body>
    <div class="user_login" >
      <form action="UserLogQ.php" method="POST" class="inputform">
        <img src="laptop-user.png"><br></br>
        <input type="text" id="username" name="username" placeholder="username" required><br></br>
        <input type="password" id="password" name="password" placeholder="password" required><br></br>
        <button type="submit">Login</button>

      </form>
    </div>
    <div class="user_login">
      <form action="UserRegPage.php" class="inputform">
        <p>New user?</p>
        <input type="submit" value="Register">
  </body>
</html>
