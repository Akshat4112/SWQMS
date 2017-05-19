<?php                                                
include 'includes/connection.inc.php';
?>
<?php include 'includes/layout.inc.php';?>

  <script type="text/javascript">
  // Load the Visualization API and the corechart package.
  google.charts.load('current', {'packages':['corechart']});
  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
  function drawChart()  {

        // Create the data table.
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Topping');
  data.addColumn('number', 'Slices');
  data.addRows([
  ['Dissolved Oxygen',6],
  ['Total Dissolved Solids', 1],
  ['Total Phosphate', 1],
  ['Orthophosphate', 2],
  ['Biochemical Oxygen Demand (BOD) ',6],
  ['Chemical Oxygen Demand (COD) ', 1],
  ['Sodium', 1],
  ['Chloride ', 2],
  ['Sulphate ',6],
  ['Fluoride', 1],
  ['Boron', 1]
  ]);

        // Set chart options
  var options = {'title':'Water Parameters',
                       'width':600,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
  var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
  chart.draw(data, options);

                }
  </script>

  <div id="chart_div">
  </div>

      </script>
      <div id="chart_div" style="width: 900px; height: 500px;"></div>

</div>
</div>
<?php include 'includes/footer.inc.php';?> 