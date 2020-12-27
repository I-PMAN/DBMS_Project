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
  <h1>Enter movie details.</h1>
</div>
<div class="form">
  <form action="AddMovieQ.php" method="POST" class="inputform">
     <label for="Name">Movie Name:</label>
    <input type="text" id="Name" name="Name" placeholder="Name" required><br></br>
     <label for="Genre">Language:</label>
    <input type="text" id="Langauge" name="Langauge" placeholder="Language" required><br></br>
     <label for="Language">Genre:</label>
     <input type="text" id="Genre" name="Genre" placeholder="Genre" required><br></br>
    <button type="submit">Create</button>
</form>

</div>
  </body>
</html>
