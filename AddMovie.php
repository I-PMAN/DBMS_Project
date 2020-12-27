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
     <label for="Genre">Genre:</label>
    <input type="text" id="Genre" name="Genre" placeholder="Genre" required><br></br>
     <label for="Language">Language:</label>
     <select id="Language" name="Language">
     <option value="English">English</option>
     <option value="Hindi">Hindi</option>
     <option value="Kannada">Kannada</option>
     <option value="Tamil">Tamil</option>
   </select><br></br>
    <button type="submit">Create</button>
</form>

</div>
  </body>
</html>
