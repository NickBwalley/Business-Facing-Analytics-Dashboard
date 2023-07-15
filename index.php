<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KPI Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <!-- The bootstrap 5 tutorial is available here: https://www.w3schools.com/bootstrap5/index.php 
    and here:https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
    <!-- The Chart JS manual is available here: https://www.chartjs.org/docs/latest/charts/area.html -->
    <div class="row">
      <div class="col-md-2 bg-light bg-gradient">
        <h1>Business-Facing Analytics Dashboard</h1>
        <div style="color:#354E9D">
          <strong>BBT4106 and BBT4206: Business Intelligence Project (and BI1 Take-Away CAT 2)<br /></strong>
          <strong><br />Name: Nicholas Bwalley<br /></strong>
          <strong>Student ID: 122790<br /></strong>
        </div>
        <br />
        <strong>Kaplan and Norton’s Balanced Scorecard</strong>
          <ul>
            <li>Financial Perspective (KPI1a and KPI1b)</li>
            <ul>
              <li><strong>Leading Indicator:</strong> Forecasted sales growth for the year. </li>
              <li><strong>Lagging Indicator:</strong> Increased profit margin for the year. </li>
            </ul>
            <li>Customer Perspective (KPI2a and KPI2b)</li>
            <ul>
              <li><strong>Leading Indicator:</strong> Number of complaints received and resolved during the year.  </li>
              <li><strong>Lagging Indicator:</strong> Customer satisfaction index for the year.</li>
            </ul>
            <li>Internal Business Processes Perspective (KPI3a and KPI3b)</li>
            <ul>
              <li><strong>Leading Indicator:</strong> Average time for tea leaves processing. </li>
              <li><strong>Lagging Indicator:</strong> Quality of the processed tea leaves. </li>
            </ul>
            <li>Innovation and Learning Perspective (KPI4a and KPI4b)</li>
            <ul>
              <li><strong>Leading Indicator:</strong> Employee Training Hours per Year</li>
              <li><strong>Lagging Indicator:</strong> Improvement in farm productivity</li>
            </ul>
          </ul>
      </div>
      <div class="col-md-10 row">
  <!-- Start of Key Metrics -->
  <?php
  function humanize_number($input){
    $input = number_format($input);
    $input_count = substr_count($input, ',');
    if($input_count != '0'){
        if($input_count == '1'){
            return substr($input, 0, -4).'K';
        } else if($input_count == '2'){
            return substr($input, 0, -8).'M';
        } else if($input_count == '3'){
            return substr($input, 0,  -12).'B';
        } else {
            return;
        }
    } else {
        return $input;
    }
  }
  ?>
  <?php
  include 'dbconfig.php';

  // Create connection
  $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //////////// HIGHEST PROFIT MARGIN
  $sql = "SELECT MAX(amount) AS highestProfit FROM payments;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $highestProfit = $row['highestProfit'];
    }
  } else {
    echo "0 results";
  }
  ///////////////// TOTAL RESOLVED COMPLAINTS
  $sql = "SELECT SUM(customer_complaints) AS customerComplaints FROM employees;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $customerComplaints = $row['customerComplaints'];
    }
  } else {
    echo "0 results";
  }
  ////////////////////// TOTAL PROCESSING TIME
  $sql = "SELECT MAX(amount) AS highestProfit FROM payments;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $highestProfit = $row['highestProfit'];
    }
  } else {
    echo "0 results";
  }
  /////////////////////////
  $sql = "SELECT MAX(amount) AS highestProfit FROM payments;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $highestProfit = $row['highestProfit'];
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
  <div class="col-md-3 my-1">
        <div class="card">
            <div class="card-body text-center">
              <strong>Highest Profit Margin (topline)</strong><hr>
              <h1>
                KES <?= humanize_number($highestProfit) ?>
              </h1>
            </div>
        </div>
  </div>
  <div class="col-md-3 my-1">
        <div class="card">
            <div class="card-body text-center">
              <strong>Total Resolved Complaints</strong><hr>
              <h1>
                <?= humanize_number(8233000000) ?>
              </h1>
            </div>
        </div>
  </div>
  <div class="col-md-3 my-1">
        <div class="card">
            <div class="card-body text-center">
              <strong>Total Processing Time</strong><hr>
              <h1>
                <?= humanize_number(6400000.25) ?>
              </h1>
            </div>
        </div>
  </div>
  <div class="col-md-3 my-1">
        <div class="card">
            <div class="card-body text-center">
              <strong>Total Number of Trained Employees</strong><hr>
              <h1>
                <?= humanize_number(350) ?>
              </h1>
            </div>
        </div>
  </div>
  <!-- End of Key Metrics -->

    <!-- Start of KPI DIVs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php include 'kpi1.php'; ?> 
    <?php include 'kpi2.php'; ?>
    <?php include 'kpi3.php'; ?>
    <?php include 'kpi4.php'; ?>
    <!-- End of KPI DIVs -->
  </body>
</html>