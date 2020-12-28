<?php
session_start();
include 'dbcon.php';

$sql = mysqli_query($conn, "SELECT * FROM movie");
while($row = mysqli_fetch_array($sql)){
  $names[] = $row['movie_name'];
}
?>
<html>
<?php include('Admin_navbar1.html'); ?>
<link rel="stylesheet" href="styles.css">
<body>
<div class="form_display" style="float:left;  margin:180px 0px 0px 200px">
<form action="" method="POST">
    <br>
<select name="movie_del">
 <option value="No movie is selected">[Choose Movie below]</option>
 <?php
 foreach($names as $name){
   echo '<option value="'.$name.'">'.$name.'</option>';
 }
 ?>
</select><br><br>
<input type="submit" value="Select" class="del_sel" style="border-radius:5px;"><br>
</form>
</div>
</body>
</html>
<?php
$movie_del = filter_input(INPUT_POST, 'movie_del');
if(isset($movie_del)){
    echo '<script>alert("Are you sure you want to delete the movie from database?");</script>';
}
?>
<div class="show_display" style="float:right; margin:150px 200px 0px 0px">
<h4>Selected Movie:<br> <?php echo $movie_del; ?> </h4>
<input type="submit" value="Delete" class="del_sel" onclick="del_sel()" style="border-radius:5px;" >
</div>

<?php if(!empty($movie_del)){ ?>
  <script>
  del_sel = function(){
    <?php 
    $sql1="SET FOREIGN_KEY_CHECKS=0;"; // disable foregin key check
    mysqli_query($conn, $sql1);
    $sql = "DELETE FROM movie WHERE movie_name='$movie_del'";
    
    if (mysqli_query($conn, $sql)) {
      echo '<script>alert("Movie deleted successfully");</script>';
    } 
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $sql2="SET FOREIGN_KEY_CHECKS=1;"; //Re-enable foregin key check
    mysqli_query($conn, $sql2);
    mysqli_close($conn);
  ?>
  }</script>
<?php } ?> 
