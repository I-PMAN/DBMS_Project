<?php
 session_start();
 require "dbcon.php";
 $Name = filter_input(INPUT_POST, 'Name');
 $Language = filter_input(INPUT_POST, 'Language');
 $Genre = filter_input(INPUT_POST, 'Genre');

 $sql = "INSERT INTO movie(movie_name, movie_lang, movie_genre)
 VALUES('$Name', '$Language', '$Genre')";
 
 if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 
 mysqli_close($conn);

?>