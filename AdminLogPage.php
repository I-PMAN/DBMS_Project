<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles.css">
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
</head>
  <body>
    <div class="user_login">
      <form action="AdminLogQ.php" method="POST" class="inputform">
        <img src="laptop-user.png">
        <p>Admin Login</p>
        <input type="text" id="username" name="username" placeholder="username" required><br></br>
        <input type="password" id="password" name="password" placeholder="password" required><br></br>
        <button type="submit">Login</button>
      </form>
    </div>
    <div class="inputform" style="padding:200px 200px 0px 0px; width:300px; float:right;">
      <img src="caution.png" class="cautionImg">
      <p>This page is restricted for users </p>
    </div>

  </body>
</html>
