let chart = $("#chart");
new Chart(chart, {
  type: 'line',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    datasets: [{
        label: "online tutorial subjects",
        data: [9, 8, 10, 7, 6, 12, 5, 8, 9, 10, 5, 7],
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
        }
      }
    },
    tension: 0.2
  },
});