<?php                                                
include 'includes/connection.inc.php';
?>
<?php include 'includes/layout.inc.php';?>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = [
      "Vishakapatnam",
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
 
 <div class="container" style="margin-top: 20px;">
      <div class="row">
        <div class="col-sm-4">
              <form action="charts.php" method="POST">
                <div class="ui-widget" style="margin:auto">
                    <label for="tags">Location: </label>
                      <input id="tags" name="loc">
                </div>
              </form>
        </div>

        <div class="col-sm-4">
            Date :
            <input type="date" name="date">
        </div>

        <div class="col-sm-4" style="margin-top: 20px;">
          <input class="btn btn-primary" type="submit" name="submit" value="submit">
        </div>
      </div>
</div>
<?php 
if(isset($_POST['submit'])){
  if(!empty($_POST['loc']) and !empty($_POST['date'])){

echo $date= $_POST['date'];
echo $location =$_POST['loc'];    
  }
}

list($year, $month, $day) = explode('-', $date);
echo $month;
if ($month < 10)
{
  $string_number = strval($month);
  $string_number = $string_number[1];
  $month = (int)$string_number;
}
shell_exec("python test_csv.py $month");
shell_exec("python test_csv1.py $location");
?>
<div class="container">
<div class="row">
  <div class="col-md-6">
    <img src="foo.jpg" style="width: 100%">
  </div>
  <div class="col-md-6">
    <img src="scplot.png" style="width: 100%">
  </div>
</div>
</div>
<?php include 'includes/footer.inc.php';?> 