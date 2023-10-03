
$.ajax({
  method: 'GET',
  url: 'http://localhost/statistic',
  success:function(response) {
    let chart = $("#chart");
    new Chart(chart, {
      type: 'line',
      data: {
        labels: response.dates,
        datasets: [{
            label: "Tasks count in 30 days",
            data: response.totals,
        }],
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom'
          }
        },
        scales: {
          x: {
            grid: {
              display: false
            }            
          },
          y: {
            grid: {
              display: false
            },
            suggestedMin: 0
          }
        },
        tension: 0.2
      },
    });
  }
})