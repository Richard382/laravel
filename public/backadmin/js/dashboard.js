(function($) {
  'use strict';
  $(function() {
    if ($('#dashoard-area-chart').length) {
      var lineChartCanvas = $("#dashoard-area-chart").get(0).getContext("2d");
      var data = {
        labels: ["2013", "2014", "2014", "2015", "2016", "2017", "2018"],
        datasets: [
          {
            label: 'Target',
            data: [0, 6, 1, 6, 1, 4, 0],
            backgroundColor: 'rgba(130, 83, 235, 0.6)',
            borderColor: [
              'rgba(130, 83, 235, 0.6)'
            ],
            borderWidth: 2,
            fill: true
          },
          {
            label: 'Profit',
            data: [0, 3, 5, 1, 3, 2, 0],
            backgroundColor: 'rgba(56, 213, 122, 0.6)',
            borderColor: [
              'rgba(56, 213, 122, 0.6)'
            ],
            borderWidth: 2,
            fill: true
          }
        ]
      };
      var options = {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,
              beginAtZero: true,
              stepSize: 1,
              fontColor: "rgba(0, 0, 0, 0.3)"
            },
            gridLines: {
              color: "rgba(0, 0, 0, 0.03)"
            }
          }],
          xAxes: [{
            display: false,
            gridLines: {
              color: "rgba(0, 0, 0, 0)",
              display: false
            }
          }]
        },
        legend: {
          display: false
        },
        elements: {
          point: {
            radius: 2
          }
        },
        stepsize: 100
      };
      var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: data,
        options: options
      });
    }
    if ($("#DashboardBarChart-1").length) {
      var barChartCanvas = $("#DashboardBarChart-1").get(0).getContext("2d");
      var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: {
          labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
          datasets: [{
            label: '# of Votes',
            data: [6, 9, 12, 8, 11, 13, 5, 23, 29, 20],
            backgroundColor: [
              'rgb(233,233,233)',
              'rgb(233,233,233)',
              'rgb(233,233,233)',
              'rgb(233,233,233)',
              '#08d26f',
              '#08d26f',
              '#08d26f',
              '#08d26f',
              '#08d26f',
              '#08d26f'
            ],
            borderColor: [
              'rgb(233,233,233)',
              'rgb(233,233,233)',
              'rgb(233,233,233)',
              'rgb(233,233,233)',
              'rgba(56, 213, 122, 0.2)',
              'rgba(56, 213, 122, 0.2)',
              'rgba(56, 213, 122, 0.2)',
              'rgba(56, 213, 122, 0.2)',
              'rgba(56, 213, 122, 0.2)',
              'rgba(56, 213, 122, 0.2)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            yAxes: [{
              display: false,
              ticks: {
                beginAtZero: true
              }
            }],
            xAxes: [{
              display: false
            }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            }
          }
        }
      });
    }
    if ($("#current-chart").length) {
      var CurrentChartCanvas = $("#current-chart").get(0).getContext("2d");
      var CurrentChart = new Chart(CurrentChartCanvas, {
        type: 'bar',
        data: {
          labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
          datasets: [{
              label: 'Profit',
              data: [330, 380, 230, 400, 309, 530, 340, 200],
              backgroundColor: 'rgba(8, 210 ,111, 1)'
            },
            {
              label: 'Target',
              data: [600, 600, 600, 600, 600, 600, 600],
              backgroundColor: 'rgba(247, 247 ,247, 0.8)'
            }
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 20,
              bottom: 0
            }
          },
          scales: {
            yAxes: [{
              display: false,
              gridLines: {
                display: false
              }
            }],
            xAxes: [{
              stacked: true,
              ticks: {
                beginAtZero: true,
                fontColor: "rgba(0, 0 ,0, 0.5)"
              },
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
                display: false
              },
              barPercentage: 0.5
            }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            }
          }
        }
      });
    }
    if ($('#morris-line-example').length) {
      Morris.Line({
        element: 'morris-line-example',
        lineColors: ['#dadada', '#fb9678'],
        data: [{
            y: '2006',
            a: 50,
            b: 0
          },
          {
            y: '2007',
            a: 75,
            b: 78
          },
          {
            y: '2008',
            a: 30,
            b: 12
          },
          {
            y: '2009',
            a: 35,
            b: 50
          },
          {
            y: '2010',
            a: 70,
            b: 100
          },
          {
            y: '2011',
            a: 78,
            b: 65
          }
        ],
        grid: false,
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: "always"
      });
    }
  });
})(jQuery);