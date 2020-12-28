<?php
session_start();
?>
<!DOCTYPE html>
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
        <a href="AddMovie.php">
        <button type="button" name="button" class="button button1">Add a new Movie</button>
        </a>
      </div>
      <a href="">
      <div class="right">
        <button type="button" name="button" class="button button2">Remove a Movie</button>
        </a>
        </div>
     </div>
     <div class="Movie_details"

     </div>
    </div>
  </body>
</html>
