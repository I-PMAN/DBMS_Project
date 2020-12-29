<?php
session_start();
?>
<!DOCTYPE html>
<?php include('Admin_navbar1.html'); ?>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="styles.css">
  <head>
    <meta charset="utf-8">
    <title>Admin Page</title>
  </head>
  <body>
  <div id="Admin">
    <h3 id="Adm_Wel">Welcome, Admin.</h3>
    <div class="container">
      <div class="left">
        <button type="button" name="button" class="button button1"><a href="AddMovie.php" style="text-decoration:none;">Add a new Movie</a></button>
      </div>
      <div class="right">
        <button type="button" name="button" class="button button2"><a href="RemoveMovie.php" style="text-decoration:none;">Remove a Movie</a></button>
        </div>
     </div>
    </div>
  </body>
</html>
