<?php include 'includes/layout.inc.php';
	  include 'includes/connection.inc.php';	?>

<?php // Content Area
?>
<div class="dropdown" style="margin-left: 20px; margin-top: 20px;">
<form action="location.php" method="post">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = [
      "Vishakhapatnam",
      "Yanam",
      "Machilipatnam",
      "Panaji",
      "Surat",
      "Vadodara",
      "Diu", 
"Daman" ,
"Porbandar", 
"Mangalore" , 
"Udupi", 
"Cochin", 
"Thiruvananthapuram",  
"Thrissur",  
"Calicut", 
"Kottayam",  
"Ernakulam", 
"Mumbai", 
"Puri",   
"Chennai ",
"Tuticorin ",
"Pondicherry",   
"Nagarcoil",
"Karaikal "
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
</head>
<body>
 

<div class="ui-widget">
  <label for="tags" >Location: </label>
  <input  type="text" id="tags" name="loc">
  <input type="submit" name="locsubmit" value="Submit" class="btn btn-default" style="margin-left:80px;">
</div> 

</div>
</form>
<?php
$userid=0;
$city=0;
if(isset($_POST['locsubmit'])){
	if(!empty($_POST['loc'])){
		$location = $_POST['loc'];
		$query="select city,userid from location where city='$location'";
		$query_run=mysqli_query($con,$query);
		if($query_run){
			$row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
			}
}
}
@$userid=$row['userid'];


$queryag="select *from final_param where userid='$userid'";
$run_ag=mysqli_query($con,$queryag);
if($run_ag){
$row1=mysqli_fetch_array($run_ag,MYSQLI_ASSOC);

}

?>
<div style="margin-left: 20px; margin-top: 20px;" class="col-md-3">
	<b>Parameters</b><br><br>
	Colour<br><br>
	Odour<br><br>
	Temprature&nbsp;<b>(C)</b><br><br>
	pH<br><br>
	Electrical Conductivity&nbsp;<b>(µS/cm)</b><br><br>
	Dissolved Oxygen<&nbsp;<b>(mg/L)</b><br><br>
	Ammonical Nitrogen<&nbsp;<b>(mgN/L)</b><br><br>
	Nitrate + Nitrite<&nbsp;<b>(ngN/L)</b><br><br>
	Total Coliform<&nbsp;<b>(No./100mL)</b><br><br>
	Fecal Coliform<&nbsp;<b>(No./100mL)</b>
</div>
<div class="col-md-2" style="margin-left: 20px; margin-top: 20px">
<b>Values</b>
<?php
$query="SELECT *from final_param where userid='5'";
$run_query=mysqli_query($con,$query);
$data=mysqli_fetch_array($run_query);
echo '<br><br>';
echo $color=$row1['color'].'<br><br>';
echo $odour=$row1['odour'].'<br><br>';
echo $pH=$row1['temp'].'<br><br>';
echo $temp=$row1['ph'].'<br><br>';
echo $elec_cond=$row1['elec_cond'].'<br><br>';
echo $do=$row1['diss_oxy'].'<br><br>';
echo $an=$row1['amm_nitr'].'<br><br>';
echo $nn=$row1['nitrite_nitrate'].'<br><br>';
echo $tp=$row1['total_coliform'].'<br><br>';
echo $tp=$row1['fecal_coliform'].'<br><br>';
?>
</div>
<div class="col-md-2" style="margin-left: 20px; margin-top: 20px">
<b>Status</b><br><br>
<?php 
$color=$row1['color'];
	echo '-';
	?>
	<br><br>
	<?php 
$odour=$row1['odour'];
echo "-";
	?>
	<br><br>
	<?php 
$temp=$row1['temp'];
if($temp==0){
	echo 'Good';
}
else if($temp>=15||$tem<(-9)){
	echo 'Bad';
}
	?><br><br>
	<?php 
$elec_cond=$row1['elec_cond'];
if($elec_cond==300){
	echo 'Good';
}
else if($elec_cond<=225||$elec_cond>=375){
	echo 'Bad';
}
	?><br><br>
	<?php

	$do=$row1['diss_oxy'];
if($do==5.0){
	echo 'Good';
}
else if($do<=3.75||$do>=7.25){
	echo 'Bad';
}
    ?><br><br>
    <?php
	$nn=$row1['nitrite_nitrate'];
if($nn==45){
	echo 'Good';
}
else if($nn<=33.75||$nn>=56.25){
	echo 'Bad';
}
      ?><br><br>
      <?php
    $an=$row1['amm_nitr'];
if($an==45){
	echo 'Good';
}
else if($an<=33.75||$an>=56.25){
	echo 'Bad';
}
      ?><br><br>
      <?php
 $tp=$row1['total_coliform']; 
if($tp==500){
	echo 'Good';
}
else if($tp<=225||$tp>3725){
	echo 'Bad';
}
else
{
	echo '-';
}
    ?>
    <br><br>
      <?php
 $fp=$row1['fecal_coliform']; 
if($fp==500){
	echo 'Good';
}
else if($fp<=225||$fp>3725){
	echo 'Bad';
}
else
{
	echo '-';
}
    ?>



</div>
<div class="col-md-2" style="margin-top: 20px;margin-left: 20px;">
	<b>Status Color</b><br><br>
<?php 
$color=$row1['color'];
	echo '-';
	?><br><br>
	<?php
$odour=$row1['odour'];
echo "-";
	?>
	<br><br>
	<?php 
$temp=$row1['temp'];
if($temp==0){
	echo '<img src="images/greendot.png" height="10" width="10">';
}
else if($temp>=15||$tem<(-9)){
	echo '<img src="images/reddot.png" height="10" width="10">';
}
	?><br><br>
	<?php 
$elec_cond=$row1['elec_cond'];
if($elec_cond==300){
	echo '<img src="images/greendot.png" height="10" width="10">';
}
else if($elec_cond<=225||$elec_cond>=375){
	echo '<img src="images/reddot.png" height="10" width="10">';
}
	?><br><br>
	<?php

	$do=$row1['diss_oxy'];
if($do==5.0){
	echo '<img src="images/greendot.png" height="10" width="10">';
}
else if($do<=3.75||$do>=7.25){
	echo '<img src="images/reddot.png" height="10" width="10">';
}
    ?><br><br>
    <?php
	$nn=$row1['nitrite_nitrate'];
if($nn==45){
	echo '<img src="images/greendot.png" height="10" width="10">';
}
else if($nn<=33.75||$nn>=56.25){
	echo '<img src="images/reddot.png" height="10" width="10">';
}
      ?><br><br>
      <?php
    $an=$row1['amm_nitr'];
if($an==45){
	echo '<img src="images/greendot.png" height="10" width="10">';
}
else if($an<=33.75||$an>=56.25){
	echo '<img src="images/reddot.png" height="10" width="10">';
}
 ?><br><br>
      <?php
 $tp=$row1['total_coliform']; 
if($tp==500){
	echo '<img src="images/greendot.png" height="10" width="10">';
}
else if($tp<=225||$tp>3725){
	echo '<img src="images/reddot.png" height="10" width="10">';
}
    ?><br>
    <br>
      <?php
 $fp=$row1['fecal_coliform']; 
if($fp==500){
	echo '<img src="images/greendot.png" height="10" width="10">';
}
else if($fp<=225||$fp>3725){
	echo '<img src="images/reddot.png" height="10" width="10">';
}
    ?>
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
