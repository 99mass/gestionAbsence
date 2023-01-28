//  default font-family et font-color de chartjs
Chart.defaults.global.defaultFontFamily =
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

 // recuperations les  données de la base de données dans le fichier voir.php du dossier satistique 
var S1 = document.getElementById("s1_jour").textContent;
var S2 = document.getElementById("s2_jour").textContent;
var S3 = document.getElementById("s3_jour").textContent;
var L1 = document.getElementById("l1_jour").textContent;
var L2 = document.getElementById("l2_jour").textContent;
var LP = document.getElementById("lp_jour").textContent;
var T = document.getElementById("t_jour").textContent;
var STEG = document.getElementById("steg_jour").textContent;

// diagramme circulaire
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: "pie",
  data: {
    labels: ["S1", "S2", "S3", "L1", "L2", "L'", "STEG", "T"],
    datasets: [
      {
        data: [S1, S2, S3, L1, L2, LP, STEG, T],
        // data: [12.21, 15.58, 11.25, 8.32, 20, 3, 15, 19.5],
        backgroundColor: [
          "green",
          "yellow",
          "chocolate",
          "indigo",
          "pink",
          "fuchsia",
          "blue",
          "black",
        ],
      },
    ],
  },
});
