<?php include 'includes/layout.inc.php';
include 'includes/connection.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header" >
      <a class="navbar-brand" href="#">Frequently Asked Questions</a>
    </div>
  </div>
</nav>

<div class="container">
  <h2>For assistance , kindly refer the following</h2>
  <br/>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Q. Water quality standards and their development</div> 
    </div>
    <br/>

    <div class="panel panel-primary">
      <div class="panel-heading">Q. Evaluation of standards </div>
    </div>
    <br/>

    <div class="panel panel-success">
      <div class="panel-heading">Q. WHO guidelines for drinking water quality</div>
    </div>
    <br/>

    <div class="panel panel-info">
      <div class="panel-heading">Q. Roles and functions of stakeholders .</div>
    </div>
    <br/>

    <div class="panel panel-warning">
      <div class="panel-heading">Q. Survey locations </div>
    </div>
    <br/>

    <div class="panel panel-danger">
      <div class="panel-heading">Q. Monitoring parameters and frequencies</div>
    </div>

   <br/>
  </div>
</div>

</body>

<?php
include 'includes/footer.inc.php';
?>