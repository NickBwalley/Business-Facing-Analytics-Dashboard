<div class="col-md-6 my-1">
    <div class="card">
    <div class="card-body"> <strong> KPI2a (leading): Number of Complaints Received and Resolved during the Year </strong></div>
    <div class="card-body"><canvas id="KPI2a"></canvas></div>
</div>
</div>
<div class="col-md-6 my-1">
    <div class="card">
    <div class="card-body"><strong>KPI2b (lagging): Customer Satisfaction Index for the Year</strong> </div>
    <div class="card-body"><canvas id="KPI2b"></canvas></div>
</div>
</div>
<?php
include 'dbconfig.php';

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CALL `FetchComplaintData`;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $complaintData = array();
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $complaintData[] = array(
      'x' => $row['month_year'],
      'y' => $row['number_of_complaints']
    );
  }
} else {
  echo "0 results";
}

$conn->close();
?>
<script>
      /** KPI2a - REFINED */
      const complaintChart = document.getElementById('KPI2a');

new Chart(complaintChart, {
  type: 'bar',
  data: {
    datasets: [{
      label: 'Number of Complaints',
      data: <?php echo json_encode($complaintData); ?>,
      backgroundColor: 'rgba(238, 36, 56, 0.7)'
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: 'Number of Complaints'
        }
      },
      x: {
        beginAtZero: true,
        title: {
          display: true,
          text: 'Month'
        }
      }
    },
    plugins: {
      tooltip: {
        intersect: true
      },
      legend: {
        position: 'bottom',
        labels: {
          usePointStyle: true
        }
      }
    },
    interaction: {
      mode: 'point'
    }
  }
});
      
      /** KPI 2b - REFINED */
      /* KPI2b */
      const kpi2b = document.getElementById('KPI2b');

      new Chart(kpi2b, {
        type: 'line',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            type: 'line',
            label: 'Target',
            data: [10, 10, 10, 10, 10, 10],
            borderWidth: 0.8,
            fill: false,
            borderColor: 'black',
            pointBackgroundColor: 'black',
            pointRadius: 0,
            pointStyle: 'line'
          }, {
            label: '# Profit',
            data: [20, 30, -10, -2, 15, 18],
            borderWidth: 3,
            borderColor: 'rgba(9, 50, 219, 0.75)',
            backgroundColor: 'rgba(9, 50, 219, 0.1)',
            fill: {
                target: '-1',
                above: 'rgba(85, 235, 90, 0.77)',   // Colour of the area above the target
                below: 'rgba(238, 36, 56, 0.77)'    // Colour of the area below the target
              }
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
              title: {
                display: true,
                text: 'Quantity'
              }
            },
            x: {
              title: {
                display: true,
                text: 'Month'
              },
              grid: {
                display: false
              }
            }
          },
          plugins: {
            tooltip: {
              intersect: false
            },
            legend: {
              position: 'bottom',
              labels : {
                usePointStyle: true
              }
            }
          },
          interaction: {
              mode: 'index'
          } 
        }
      });
</script>