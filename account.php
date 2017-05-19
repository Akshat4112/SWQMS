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

<div class="row">
  <div class="col-sm-6">
    <div class="mui-container-fluid" style="margin-left:20px;">
<h3>Location Details</h3>
<form action="account.php" method="post" name="form2">

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input name="address" class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Address</label>
  </div>

  <br/>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input name="city" class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">City</label>
  </div>

  <br/>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input name="state" class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">State</label>
  </div>

  <br/>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input name="pincode" class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Pincode</label>
  </div>

  <br/>

</form>

<button name="update" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--indigo-700 mdl-color-text--grey-50" style="margin-left:80px">Update
</button>

</div>

<br/>

  </div>
  <div class="col-sm-4">
    
  <div class="mui-container-fluid" style="margin-left:20px;">
<h3>Personal Details</h3>
<form action="account.php" method="POST">

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Name</label>
  </div>

  <br/>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Tel No.</label>
  </div>

  <br/>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Organisation Name</label>
  </div>

  <br/>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Organisation ID</label>
  </div>

  <br/>

</form>

<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--indigo-700 mdl-color-text--grey-50" style="margin-left:80px">
  Update
</button>

</div>
  </div>
</div>




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











      




