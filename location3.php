<?php include 'includes/layout.inc.php';
    include 'includes/connection.inc.php';  ?>

<?php // Content Area
?>
<div class="dropdown" style="margin-left: 20px; margin-top: 20px;">
Location : <select name="location">
  <option value="Agra">Agra</option>
  <option value="Mathura">Mathura</option>
  <option value="Allahabad">Allahabad</option>
  <option value="Lucknow">Lucknow</option>
  <option value="Delhi">Delhi</option>
  <option value="Kolkata">Kolkata</option>
</select>
<input type="submit" name="locsubmit" value="Submit" class="btn btn-default dropdown-toggle">
</div>
<div style="margin-left: 20px; margin-top: 20px;" class="col-md-3">
  <b>Parameters</b><br><br>
  Pesticides and Organics<br><br>
  Turbidity<br><br>
  TDS<br><br>
  
</div>
<div class="col-md-2" style="margin-left: 20px; margin-top: 20px">
<b>Values</b>
<?php
$query="SELECT *from final_param where userid='5'";
$run_query=mysqli_query($con,$query);
$data=mysqli_fetch_array($run_query);
echo '<br><br>';
for($i=0;$i<3;$i++) {
  echo $data[$i].'<br><br>';
}
?>
</div>
<div class="col-md-2" style="margin-left: 20px; margin-top: 20px">
<b>Status</b><br><br>
<?php 
$pH=3;
if($pH>5){
  echo 'Bad';
}
else{
  echo 'Good';
}
  ?><br><br>
  <?php 
$pH=3;
if($pH>5){
  echo 'Bad';
}
else{
  echo 'Good';
}
  ?><br><br>
  <?php 
$pH=3;
if($pH>5){
  echo 'Bad';
}
else{
  echo 'Good';
}
  ?><br><br>

</div>
<div class="col-md-2" style="margin-top: 20px;margin-left: 20px;">
  <b>Status Color</b><br><br>
  <?php 
$pH=1;
if($pH>5){
  echo '<img src="images/reddot.png" height="10" width="10">';
}
else{
  echo '<img src="images/greendot.png" height="10" width="10">';
}
  ?><br><br>
  <?php 
$pH=1;
if($pH>5){
  echo '<img src="images/reddot.png" height="10" width="10">';
}
else{
  echo '<img src="images/greendot.png" height="10" width="10">';
}
  ?><br><br>
  <?php 
$pH=1;
if($pH>5){
  echo '<img src="images/reddot.png" height="10" width="10">';
}
else{
  echo '<img src="images/greendot.png" height="10" width="10">';
}
  ?><br><br>
  <br><br>
</div>
<div class="col-md-12">
<center>
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="location1.php">1</a></li>
    <li><a href="location2.php">2</a></li>
    <li><a href="location3.php">3</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</center>
</div>

<?php include 'includes/footer.inc.php';?>
