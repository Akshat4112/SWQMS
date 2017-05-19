<?php include 'includes/layout.inc.php';
include 'includes/connection.inc.php';?>
<?php 
$q="select distinct userid from location";
$rq=mysqli_query($con,$q);
if($rq){
 $ar=mysqli_fetch_array($rq);
 $storeArray = Array();
while ($row = mysqli_fetch_array($rq,MYSQLI_ASSOC)) {
    $storeArray[] =  $row['userid'];  
}
}
foreach ($storeArray as $test) {
$query="select *from final_param where userid='$test'";
$runq=mysqli_query($con,$query);
$array=mysqli_fetch_array($runq,MYSQLI_ASSOC);

 $pH=$array['temp'].'<br><br>';
 $temp=$array['ph'].'<br><br>';
 $elec_cond=$array['elec_cond'].'<br><br>';
 $do=$array['diss_oxy'].'<br><br>';
 $an=$array['amm_nitr'].'<br><br>';
 $nn=$array['nitrite_nitrate'].'<br><br>';
 $tc=$array['total_coliform'].'<br><br>';
 $fc=$array['fecal_coliform'].'<br><br>';
 $counter=0;

if($pH>7){}else{
  $counter++;
}
if($temp>6){}else{
  $counter++;
}
if($elec_cond>3){}else{
  $counter++;
}
if($do>9){}else{
  $counter++;
}
if($an>3){}else{
  $counter++;
}
if($nn>6){}else{
  $counter++;
}
if($tc>8){}else{
  $counter++;
}
if($fc>5){}else{
  $counter++;
}
if($counter>=5){
  @$count=$count+1;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alerts</title>
  <meta charet="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
  <h2><b><em>Alerts</em></b></h2>
  <?php $query="select city from location where userid='$test'";
    $qurun=mysqli_query($con,$query);
    $row=mysqli_fetch_array($qurun,MYSQLI_ASSOC);
    $city=$row['city'];
    echo "<div class=\"alert alert-danger fade in\" id=\"dy\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
    <strong>Alert is on Location".' '.$city;
    ?>
</strong>
  </div><?php
    $count1 = $count;
    foreach( range(1,$count) as $item){
    }
  ?>
  </div>
</body>
<?php include 'includes/footer.inc.php';?>
