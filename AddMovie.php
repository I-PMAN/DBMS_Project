<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="styles.css">
  <head>
    <meta charset="utf-8">
    <title>Adding Movie</title>
  </head>
  <body>
<div class="Movie_details">
  <h1 style="text-align:center;margin-top:70px;">Enter movie details.</h1><br>
</div>
<div class="form">
  <form action="AddMovieQ.php" method="POST" class="inputform">
     <label for="Name"></label>
    <input type="text" id="Name" name="Name" placeholder="Name" required><br></br>
     <label for="Genre"></label>
    <input type="text" id="Genre" name="Genre" placeholder="Genre" required><br></br>
     <label for="Language"></label>
     <input id="Language" name="Language" placeholder="Language" required>
     <br></br>
    <button type="submit" style="height:30px; width:80px; border-radius:7px;">Create</button>
</form>

</div>
  </body>
</html>
