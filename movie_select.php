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
 <input type="date" name="date_select" style="margin:10px">
</div>

<div>
<select name="time_select" required>
<option value="choose time">[Choose Time]</option>
<option value="10:00:00"><time>10:00AM [10:00]</time></option>
<option value="13:00:00"><time>01:00PM [13:00]</time></option>
<option value="16:00:00"><time>04:00PM [16:00]</time></option>
<option value="19:00:00"><time>07:00PM [19:00]</time></option>
<option value="22:00:00"><time>10:00PM [22:00]</time></option>
</select>
</div>

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
<input type="submit" value="select" class="submit">
</form>
</div>

<div>
<input type="button" value="Book" onclick="book_ticket()">
</div>
<!--checking if all fileds are selected -->
<?php if(!empty($seat_select) && !empty($movie_select) && !empty($date_select) && !empty($time_select))
{ ?>
  <script>
  book_ticket = function(){
  window.location="test1.php"
  }</script>
<?php } ?>

<?php
// ###getting selected values from form###
$date_select = filter_input(INPUT_POST, 'date_select');
$time_select = filter_input(INPUT_POST, 'time_select');
$movie_select = filter_input(INPUT_POST, 'movie_select');
$seat_select = filter_input(INPUT_POST, 'seat_select');
// ###Mandatory to place this here###
?>

<div class="show_display">
<h4>Selection will be displayed here</h4>
<h4>Movie: <?php echo $movie_select; ?> </h4>
<h4>Seats: <?php echo $seat_select; ?> </h4>
<h4>Date: <?php echo $date_select; ?> </h4>
<h4>Time: <?php echo $time_select; ?> </h4>
</div> 
</body>
</html>

<?php 
$test='8';
$sql2=mysqli_query($conn,"SELECT count(*) as total from seats WHERE date_time='2020-12-22 13:00:00' and id='$test'");
$row2=mysqli_fetch_assoc($sql2);
echo $row2['total'];

/* $sql1 = mysqli_query($conn, "SELECT * FROM seats WHERE date_time='2020-12-22 10:00:00'");
while($row1 = mysqli_fetch_array($sql1)){
  $seat_s[] = $row1['seat_no'];
}
foreach($seat_s as $seat_ss){
  echo $seat_ss;
}
*/


?>
