<?php
session_start();
include 'dbcon.php';

$sql = mysqli_query($conn, "SELECT * FROM movie");
while($row = mysqli_fetch_array($sql)){
  $names[] = $row['movie_name'];
}
?>

<html>
<link rel="stylesheet" href="styles.css">
<body>
<div class="form_display">
<form action="" method="POST" id="movie_form">
  <div>
<select name="movie_select">
<option value="No movie is selected">[Choose Movie below]</option>
<?php
foreach($names as $name){
  echo '<option value="'.$name.'">'.$name.'</option>';
}
?>
</select>
</div>
<div>
<select name="seat_select" required>
<option value="No. of seats not selected">[Choose no. of seats]</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
<div>
<input type="date" name="date_select">
<br>
<input type="submit" value="select" class="submit">
</form>
</div>

</body>
</html>

<?php
$movie_select = filter_input(INPUT_POST, 'movie_select');
$seat_select = filter_input(INPUT_POST, 'seat_select');
$date_select = filter_input(INPUT_POST, 'date_select');
if(!empty($seat_select) && !empty($movie_select) && !empty($date_select)){
?>
  <script>
  book_ticket = function(){
  window.location="test1.php"
  }</script>
<?php
}
?>
<div class="show_display">
<h3>Selection will be displayed here</h3>
<h4>Movie: <?php echo $movie_select; ?> </h4>
<h4>Seats: <?php echo $seat_select; ?> </h4>
<h4>Date: <?php echo $date_select; ?> </h4>
</div>
<div>
<input type="button" value="Book" onclick="book_ticket()">
</div>

