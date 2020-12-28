<?php
 session_start();
 require "dbcon.php";
 $Name = filter_input(INPUT_POST, 'Name');
 $Language = filter_input(INPUT_POST, 'Language');
 $Genre = filter_input(INPUT_POST, 'Genre');
 $Ratings = filter_input(INPUT_POST, 'Ratings');
 $Description = filter_input(INPUT_POST, 'Description');

 $sql = "INSERT INTO movie(movie_name, movie_lang, movie_genre, ratings, movie_des)
 VALUES('$Name', '$Language', '$Genre','$Ratings','$Description')";
 
 if (mysqli_query($conn, $sql)) {
   echo '<script>alert("Movie added successfully");</script>';
   header("Location: AdminPage.php");
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 
 mysqli_close($conn);
?>