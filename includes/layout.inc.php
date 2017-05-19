<!DOCTYPE html>
<html>
<head>
  <title>Title</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" type="text/css" href="bs.min.css">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Color', 'White'],
          ['Odour',     11],
          ['Temprature',  2],
          ['pH',      2],
          ['Electrical Conductivity', 2],
          ['Dissolved Oxygen',    7],
          ['Ammonical Nitrogen',    7],
          ['Nitrate+Nitrite',    7],
          ['Total Coliform',    7],
          ['Fecal Coliform',    7],
        ]);

        var options = {
          title: 'Map Based Pie Chart'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
        <script>

      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
        var uluru = {lat: 13.34, lng: 80.131};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });

        var contentString = '<?php   
        echo 'Color : White';
        echo 'Odour : White';
        echo 'Temprature : White';
        echo 'pH : White';
        echo 'Electrical Conductivity : White';
        echo 'Dissolved Oxygen : White';
        echo 'Ammonical Nitrogen : White';
        echo 'Nitrate + Nitrite: White';
        echo 'Total Coliform: White';
        echo 'Fecal Coliform : White';
        ?>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Uluru (Ayers Rock)'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVdOx_8x3z7qKmPzsgioLny6qiSd9h7gw&libraries=places&callback=initMap">
    </script>


</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row mdl-color--light-blue-A400">
      <div class="mdl-layout-spacer" style="color: white;">
        <center><h3><b>SEA WATER QUALITY MONITORING SYSTEM</b></h3></center>

      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>

        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
        <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button mdl-button--icon">
  <i class="material-icons">more_vert</i>
</button>

<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-right">
  <a href=""><li class="mdl-menu__item">Logout</li></a>
  <?php include 'logout_script.php';?>
</ul>

      </div>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <a href="home.php"><span class="mdl-layout-title" style="margin-top: 20px; margin-left: 70px;"><b>SWQMS<br></b></span><a>
    <nav class="mdl-navigation"><b class="mdl-color-text--red-900"><em><center>(Ministry of Earth Sciences)</center></em></b>
      <a class="mdl-navigation__link mdl-color--indigo-400 mdl-color-text--grey-50" href="home.php"><b>Home</b></a>
      <a class="mdl-navigation__link" href="upload.php"><b>Import</b></a>
      <a class="mdl-navigation__link" href="map.php"><b>Map</b></a>
      <a class="mdl-navigation__link" href="location.php"><b>Locations Overview</b></a>
      <a class="mdl-navigation__link" href="charts.php"><b>Charts</b></a>
      <a class="mdl-navigation__link" href="alerts.php"><b>Alerts</b></a>
      <a class="mdl-navigation__link" href="reports.php"><b>Reports</b></a>
      <a class="mdl-navigation__link" href="ytlive.php"><b>Live Video Reports</b></a>
      <a class="mdl-navigation__link" href="account.php"><b>My Profile</b></a>
      <a class="mdl-navigation__link" href="help.php"><b>Help</b></a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">










