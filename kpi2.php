<div class="col-md-6 my-1">
    <div class="card">
    <div class="card-body">KPI2a (leading):</div>
    <div class="card-body"><canvas id="KPI2a"></canvas></div>
</div>
</div>
<div class="col-md-6 my-1">
    <div class="card">
    <div class="card-body">KPI2b (lagging):</div>
    <div class="card-body"><canvas id="KPI2b"></canvas></div>
</div>
</div>
<script>
      /* KPI2a */
      const kpi2a = document.getElementById('KPI2a');
      new Chart(kpi2a, {
        type: 'bar',
        data: {
          datasets: [{
            label: 'First Dataset',
            data: [{
              x: 20,
              y: 30,
              r: 20
            }, {
              x: 40,
              y: 10,
              r: 10
            }, {
              x: 15,
              y: 20,
              r: 5
            },],
            backgroundColor: 'rgba(238, 36, 56, 0.7)'
          }, {
            label: 'Second Dataset',
            data: [{
              x: 8,
              y: 7,
              r: 15
            }, {
              x: 4,
              y: 7,
              r: 10
            }, {
              x: 2,
              y: 3,
              r: 5
            },],
            backgroundColor: 'rgba(53, 32, 240, 0.65)'
          }
        ]
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
              labels : {
                usePointStyle: true
              }
            }
          },
          interaction: {
              mode: 'point'
          } 
        }
      });
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