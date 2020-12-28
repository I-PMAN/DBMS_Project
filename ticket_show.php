<?php
session_start();
include "dbconn.php";
$query = mysqli_query($conn, "SELECT * FROM ticket WHERE username = '$username'");
if(mysqli_num_rows($query) > 0){
  $row = mysqli_fetch_assoc($query);
  $info = $row['pword'];
?>
<html>
    <link rel="stylesheet" href="styles.css">
<body>
<div class="ticket_div">
    <h3>Booked Ticket</h3>
    <h2>Movie: <?php echo $ ?>

</div>
</body>
</html>