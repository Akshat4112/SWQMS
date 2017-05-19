
<?php 
include 'includes/connection.inc.php';
include 'includes/layout.inc.php';?>
<link rel="stylesheet" type="text/css" href="css1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body background="images/polygon.jpg">
<div class="container-fluid">
<div class="row">
<div class="col-sm-6 xyz" style="padding-left: 50px; margin-top: 20px;">
      <p><em><strong>SWQMS </strong></em>is web-based water quality data management software which takes physio-chemical, biological, environmental parameters and can also take reports in spreadsheets and excel formats which helps people track monitoring locations, projects, samples, and results.</p><p> It is unique in that people can manage their data locally ,and reports are automatically sended to government agencies behind the scenes. This makes it ideal for agencies who would rather focus their time and energy on data collection and analysis. </p>
</div>
    <div class="col-sm-6" style="padding-left:100px; margin-top: 20px;">
      <b>Notifications</b>
      <br>
  <div class="alert alert-success" role="alert">Upcoming Events </div>
<div class="alert alert-info" role="alert">Someone Has Uploaded data</div>
<div class="alert alert-warning" role="alert">Alert is found</div>
<div class="alert alert-danger" role="alert">New Paramneters Discovered</div>

</div>
</div>
<div class="container">
<div class="row">
 <div class="col-sm-6" style="padding:0; margin-top: 0px;">
  <table class="table table-hover">
    <thead><em><b>WATER QUALITY STANDARDS FOR COASTAL WATERS MARINE OUTFALLS</b></em></thead>
    <p>In a coastal segment marine water is subjected to several types of uses. Depending of the types of uses and activities, water quality criteria have been specified to determine its suitability for a particular purpose, Based on this, primary water quality criteria have been specified for following five designated best uses:</p>
      <tr>
        <th><h4>Class</h4></th>
        <th><h4>Designated Best Use</h4></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>SW-I</td>
        <td>Salt pans, Shell fishing, Mariculture and Ecologically Sensitive Zone.</td>
      </tr>
      <tr>
        <td>SW-II</td>
        <td>Bathing, Contact Water Sports and Commercial fishing.</td>
      </tr>
      <tr>
        <td>SW-III</td>
        <td>Industrial cooling, Recreation (non contact) and Aesthetics</td>
      </tr>
      <tr>
        <td>SW-IV</td>
        <td>Harbour.</td>
      </tr>
      <tr>
        <td>SW-V</td>
        <td>Navigation and Controlled Waste Disposal</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="col-sm-6">
<h2 style="margin-left: 100px;">Search for the location</h2>
    <div class="input-group" style="padding-left: 100px;">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
  </div>
  </div>
</div>

</body>
<?php include 'includes/footer.inc.php'; ?>








    