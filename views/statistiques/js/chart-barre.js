//  default font-family et font-color de chartjs
Chart.defaults.global.defaultFontFamily =
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

// recuperations des donnes
var S1 = document.getElementById("s1_mois").textContent;
var S2 = document.getElementById("s2_mois").textContent;
var S3 = document.getElementById("s3_mois").textContent;
var L1 = document.getElementById("l1_mois").textContent;
var L2 = document.getElementById("l2_mois").textContent;
var LP = document.getElementById("lp_mois").textContent;
var T = document.getElementById("t_mois").textContent;
var STEG = document.getElementById("steg_mois").textContent;

// diagramme en barre
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["mois: Août"],
    datasets: [
      {
        label: "S1",
        backgroundColor: "green",
        borderColor: "green",
        data: [S1],
      },
      {
        label: "S2",
        backgroundColor: "yellow",
        borderColor: "yellow",
        data: [S2],
      },
      {
        label: "S3",
        backgroundColor: "chocolate",
        borderColor: "chocolate",
        data: [S3],
      },
      {
        label: "L1",
        backgroundColor: "indigo",
        borderColor: "indigo",
        data: [L1],
      },
      {
        label: "L2",
        backgroundColor: "pink",
        borderColor: "pink",
        data: [L2],
      },
      {
        label: "L'",
        backgroundColor:"fuchsia",
        borderColor:"fuchsia",
        data: [L2],
      },
      {
        label: "STEG",
        backgroundColor: "blue",
        borderColor: "blue",
        data: [STEG],
      },
      {
        label: "T",
        backgroundColor: "black",
        borderColor: "black",
        data: [T],
      },
    ],
  },
  options: {
    legend: {
      display: true,
    },
    scales: {
      yAxes: [
        {
          ticks: {
            min: 0,
            maxTicksLimit: 20,
          },
          gridLines: {
            color: "rgba(0, 0, 0, .125)",
          },
        },
      ],
    },
  },
});
