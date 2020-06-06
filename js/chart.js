
$('document').ready(function () {
  $.ajax({
    type: "GET",
    url: "api.php",
    dataType: "json",
    success: function (data) {
      let arrayData = [];
      let cases = [];
      let deaths = [];
      let suspects = [];
      for (let i = 0; i < data.length; i++) {
        arrayData.push(data[i].state);
        cases.push(data[i].cases);
        deaths.push(data[i].deaths);
        suspects.push(data[i].suspects);
      }
      graph(arrayData, cases, deaths, suspects);
    }
  });
});

function graph(nome, casos, mortes, suspeitos) {



  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: nome,
      datasets: [{
        label: 'Casos confirmados',
        data: casos,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)'

        ],
        borderColor: [
          'rgba(255, 99, 132, 1)'
        ],
        borderWidth: 1
      },
      { 
        label: "Mortes",
         data: mortes,
         borderWidth: 2,
         borderColor: '#b50000',
         backgroundColor: '#ff4747',
        },
        { 
          label: "Suspeitos",
           data: suspeitos,
           borderWidth: 2,
           borderColor: 'rgba(255, 206, 86, 1)',
           backgroundColor: 'rgba(255, 159, 64, 0.2)',
          },
    ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });


}


