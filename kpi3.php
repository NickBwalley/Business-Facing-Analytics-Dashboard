<div class="col-md-6 my-1">
    <div class="card">
    <div class="card-body">KPI3a (leading):</div>
    <div class="card-body"><canvas id="KPI3a"></canvas></div>
    </div>
</div>
<div class="col-md-6 my-1">
    <div class="card">
    <div class="card-body">KPI3b (lagging):</div>
    <div class="card-body"><canvas id="KPI3b"></canvas></div>
    </div>
</div>
<script>
      /* KPI3a */
      const kpi3a = document.getElementById('KPI3a');

      new Chart(kpi3a, {
        type: 'line',
        data: {
        labels: [
          'Red',
          'Green',
          'Yellow',
          'Grey',
          'Blue'
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [11, 16, 7, 3, 14],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(75, 192, 192)',
            'rgb(255, 205, 86)',
            'rgb(201, 203, 207)',
            'rgb(54, 162, 235)'
          ]
        }]
      },
        options: {
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
          }}
      });

      /* KPI3b */
      const kpi3b = document.getElementById('KPI3b');

      new Chart(kpi3b, {
        type: 'line',
        data: {
          labels: [
            'Red',
            'Blue',
            'Yellow'
          ],
          datasets: [{
            label: 'My First Dataset',
            data: [300, 50, 100],
            backgroundColor: [
              'rgb(255, 99, 132)',
              'rgb(54, 162, 235)',
              'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
          }]
        },
        options: {
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