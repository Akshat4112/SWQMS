<?php
include 'includes/connection.inc.php';
if(isset($_POST['update'])){
if(isset($_POST['address']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['pincode'])){
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$id=5;

$query="insert into location(address,city,state,pincode,userid)values('$address','$city','$state','$pincode','$id')";
$runquery=mysqli_query($con,$query);
if($query){
  echo "<script>alert('Address  is Updated')</script>";
}
else{
  echo' Error';
}

}else{
  echo 'Please fill the coloumns';
}
}
?>
<?php include 'includes/layout.inc.php';?>
<div class="container">
<div class="row">
<h3>Profile Update</h3>
  <div class="col-lg-4">
  <div class="form-group has-success">
  <label class="control-label" for="inputSuccess">Name</label>
  <input type="text" class="form-control" id="inputSuccess">
</div>
<div class="form-group has-success">
  <label class="control-label" for="inputSuccess">Telephone No.</label>
  <input type="text" class="form-control" id="inputSuccess">
</div>
<div class="form-group has-success">
  <label class="control-label" for="inputSuccess">Organisation Name</label>
  <input type="text" class="form-control" id="inputSuccess">
</div>
<div class="form-group has-success">
  <label class="control-label" for="inputSuccess">Organisation ID</label>
  <input type="text" class="form-control" id="inputSuccess">
</div>
<div class="form-group has-success">
  <label class="control-label" for="inputSuccess">Address</label>
  <input type="text" class="form-control" id="inputSuccess">
</div>
<div class="form-group has-success">
  <label class="control-label" for="inputSuccess">City</label>
  <input type="text" class="form-control" id="inputSuccess">
</div>
<div class="form-group has-success">
  <label class="control-label" for="inputSuccess">State</label>
  <input type="text" class="form-control" id="inputSuccess">
</div>
<div class="form-group has-success">
  <label class="control-label" for="inputSuccess">Pincode</label>
  <input type="text" class="form-control" id="inputSuccess">
</div>

<div class="form-group">
<span class="input-group-btn">
      <button class="btn btn-default" type="button">Submit</button>
    </span>
  </div>
</div></div></div>




   <!-- <h1>Update you profile</h1>
    <form name="form2" method="POST" action="account.php">
    Address<input type="text" name="address"><br>
    City<input type="text" name="city"><br>
    State<input type="text" name="state"><br>
    Pincode<input type="text" name="pincode"><br>
    <input type="submit" name="update" value="Update">
    </form>
</div>
</div>
-->

<?php include 'includes/footer.inc.php';?>











      




