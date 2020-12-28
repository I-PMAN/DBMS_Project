<?php
 session_start();
 require "dbcon.php";
 $Name = filter_input(INPUT_POST, 'Name');
 $Language = filter_input(INPUT_POST, 'Language');
 $Genre = filter_input(INPUT_POST, 'Genre');

 if (!empty($Name))
 {
   if(!empty($Language))
   {
    if (!empty($Genre))
    {
     $sql = "INSERT INTO movie(Name, Language, Genre)
     values($Name, $Language, $Genre)";
     if ($conn->query($sql))
     {
       echo '<script>alert("Movie added successfully")</script>';
       header("Location: AdminPage.php");
     }
     else
     {
        echo "Error: ". $sql ."". $conn->error;
     }
     $conn->close();
    }
    else
    {
     echo "Genre should not be empty";
     die();
    }
  }
  else
  {
   echo "Langauge should not be empty";
   die();
  }
}
else {
     echo "Movie name should not be empty";
     die();
}

?>
