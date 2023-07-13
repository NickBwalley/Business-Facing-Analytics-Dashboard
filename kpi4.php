<div class="col-md-6 my-1">
    <div class="card">
    <div class="card-body">KPI4a (leading):</div>
    <div class="card-body"><canvas id="KPI4a"></canvas></div>
    </div>
</div>
<div class="col-md-6 my-1">
    <div class="card">
    <div class="card-body">KPI4b (lagging):</div>
    <div class="card-body"><canvas id="KPI4b"></canvas></div>
</div>
</div>
<script>
      /* KPI4a */
      const kpi4a = document.getElementById('KPI4a');

      new Chart(kpi4a, {
        type: 'bar',
        data: {
        labels: [
          'Eating',
          'Swimming',
          'Sleeping',
          'Designing',
          'Coding',
          'Cycling',
          'Running'
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [65, 59, 90, 81, 56, 55, 40],
          fill: true,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgb(255, 99, 132)',
          pointBackgroundColor: 'rgb(255, 99, 132)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgb(255, 99, 132)'
        }, {
          label: 'My Second Dataset',
          data: [28, 48, 40, 19, 96, 27, 100],
          fill: true,
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgb(54, 162, 235)',
          pointBackgroundColor: 'rgb(54, 162, 235)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgb(54, 162, 235)'
        }, {
          label: 'Target',
          data: [60, 60, 60, 60, 60, 60, 60],
          fill: false,
          backgroundColor: 'transparent',
          borderColor: 'black',
          pointBackgroundColor: 'black',
          pointBorderColor: 'black',
          pointRadius: 0,
          pointStyle: 'line'
        }]
      },
        options: {
          elements: {
            line: {
              borderWidth: 2
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

      /* KPI4b */
      const kpi4b = document.getElementById('KPI4b');

      new Chart(kpi4b, {
        type: 'line',
        data: {
          labels: [
            'January',
            'February',
            'March',
            'April'
          ],
          datasets: [{
            type: 'line',
            label: 'Target',
            data: [18, 18, 18, 18],
            borderWidth: 1.2,
            fill: false,
            borderColor: 'black',
            pointBackgroundColor: 'black',
            pointRadius: 0,
            pointStyle: 'line'
          }, {
            type: 'bar',
            label: 'Dataset 1',
            data: [10, 20, 30, 40],
            borderColor: 'rgba(236, 53, 77, 1)',
            backgroundColor: 'rgba(236, 53, 77, 0.86)'
          }, {
            type: 'bar',
            label: 'Dataset 2',
            data: [15, 25, 30, 20],
            borderColor: 'rgba(77, 148, 241, 1)',
            backgroundColor: 'rgba(77, 148, 241, 0.82)'
          }, {
            type: 'bar',
            label: 'Dataset 3',
            data: [15, 25, 30, 20],
            borderColor: 'grey)',
            backgroundColor: 'grey'
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