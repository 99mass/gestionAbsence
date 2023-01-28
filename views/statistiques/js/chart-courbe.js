//  default font-family et font-color de chartjs
Chart.defaults.global.defaultFontFamily =
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";
/**
 * type graphique :courbe
 */
//recuperations des valeurs dans le fichier voir.php du dossier satatistisque

// mois Janvier
var s1_janvier = document.getElementById("s1_janvier").textContent;
var s2_janvier = document.getElementById("s2_janvier").textContent;
var s3_janvier = document.getElementById("s3_janvier").textContent;
var l1_janvier = document.getElementById("l1_janvier").textContent;
var l2_janvier = document.getElementById("l2_janvier").textContent;
var lp_janvier = document.getElementById("lp_janvier").textContent;
var steg_janvier = document.getElementById("steg_janvier").textContent;
var t_janvier = document.getElementById("t_janvier").textContent;

// mois fevrier
var s1_fevrier = document.getElementById("s1_fevrier").textContent;
var s2_fevrier = document.getElementById("s2_fevrier").textContent;
var s3_fevrier = document.getElementById("s3_fevrier").textContent;
var l1_fevrier = document.getElementById("l1_fevrier").textContent;
var l2_fevrier = document.getElementById("l2_fevrier").textContent;
var lp_fevrier = document.getElementById("lp_fevrier").textContent;
var steg_fevrier = document.getElementById("steg_fevrier").textContent;
var t_fevrier = document.getElementById("t_fevrier").textContent;

// mois mars
var s1_mars = document.getElementById("s1_mars").textContent;
var s2_mars = document.getElementById("s2_mars").textContent;
var s3_mars = document.getElementById("s3_mars").textContent;
var l1_mars = document.getElementById("l1_mars").textContent;
var l2_mars = document.getElementById("l2_mars").textContent;
var lp_mars = document.getElementById("lp_mars").textContent;
var steg_mars = document.getElementById("steg_mars").textContent;
var t_mars = document.getElementById("t_mars").textContent;

// mois avril
var s1_avril = document.getElementById("s1_avril").textContent;
var s2_avril = document.getElementById("s2_avril").textContent;
var s3_avril = document.getElementById("s3_avril").textContent;
var l1_avril = document.getElementById("l1_avril").textContent;
var l2_avril = document.getElementById("l2_avril").textContent;
var lp_avril = document.getElementById("lp_avril").textContent;
var steg_avril = document.getElementById("steg_avril").textContent;
var t_avril = document.getElementById("t_avril").textContent;

// mois mai
var s1_mai = document.getElementById("s1_mai").textContent;
var s2_mai = document.getElementById("s2_mai").textContent;
var s3_mai = document.getElementById("s3_mai").textContent;
var l1_mai = document.getElementById("l1_mai").textContent;
var l2_mai = document.getElementById("l2_mai").textContent;
var lp_mai = document.getElementById("lp_mai").textContent;
var steg_mai = document.getElementById("steg_mai").textContent;
var t_mai = document.getElementById("t_mai").textContent;

// mois juin
var s1_juin = document.getElementById("s1_juin").textContent;
var s2_juin = document.getElementById("s2_juin").textContent;
var s3_juin = document.getElementById("s3_juin").textContent;
var l1_juin = document.getElementById("l1_juin").textContent;
var l2_juin = document.getElementById("l2_juin").textContent;
var lp_juin = document.getElementById("lp_juin").textContent;
var steg_juin = document.getElementById("steg_juin").textContent;
var t_juin = document.getElementById("t_juin").textContent;

// mois juillet
var s1_juillet = document.getElementById("s1_juillet").textContent;
var s2_juillet = document.getElementById("s2_juillet").textContent;
var s3_juillet = document.getElementById("s3_juillet").textContent;
var l1_juillet = document.getElementById("l1_juillet").textContent;
var l2_juillet = document.getElementById("l2_juillet").textContent;
var lp_juillet = document.getElementById("lp_juillet").textContent;
var steg_juillet = document.getElementById("steg_juillet").textContent;
var t_juillet = document.getElementById("t_juillet").textContent;

// mois octobre
var s1_octobre = document.getElementById("s1_octobre").textContent;
var s2_octobre = document.getElementById("s2_octobre").textContent;
var s3_octobre = document.getElementById("s3_octobre").textContent;
var l1_octobre = document.getElementById("l1_octobre").textContent;
var l2_octobre = document.getElementById("l2_octobre").textContent;
var lp_octobre = document.getElementById("lp_octobre").textContent;
var steg_octobre = document.getElementById("steg_octobre").textContent;
var t_octobre = document.getElementById("t_octobre").textContent;

// mois novembre
var s1_novembre = document.getElementById("s1_novembre").textContent;
var s2_novembre = document.getElementById("s2_novembre").textContent;
var s3_novembre = document.getElementById("s3_novembre").textContent;
var l1_novembre = document.getElementById("l1_novembre").textContent;
var l2_novembre = document.getElementById("l2_novembre").textContent;
var lp_novembre = document.getElementById("lp_novembre").textContent;
var steg_novembre = document.getElementById("steg_novembre").textContent;
var t_novembre = document.getElementById("t_novembre").textContent;

// mois decembre
var s1_decembre = document.getElementById("s1_decembre").textContent;
var s2_decembre = document.getElementById("s2_decembre").textContent;
var s3_decembre = document.getElementById("s3_decembre").textContent;
var l1_decembre = document.getElementById("l1_decembre").textContent;
var l2_decembre = document.getElementById("l2_decembre").textContent;
var lp_decembre = document.getElementById("lp_decembre").textContent;
var steg_decembre = document.getElementById("steg_decembre").textContent;
var t_decembre = document.getElementById("t_decembre").textContent;




// ***************************************************/
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: ["Janv", "Fév", "Mars", "Avr", "Mai", "Juin", "Juil", "Oct", "NOv", "Déc"],
    datasets: [
      {
        label: "SERIE S1",
        lineTension: 0.3,
        backgroundColor: "rgb(255,255,255,0.1)",
        borderColor: "green",
        data: [s1_janvier,s1_fevrier,s1_mars,s1_avril,s1_mai,s1_juin,s1_juillet,s1_octobre,s1_novembre,s1_decembre],
      },
      {
        label: "SERIES S2",
        lineTension: 0.3,
        backgroundColor: "rgb(255,255,255,0.1)",
        borderColor: "yellow",

        data: [s2_janvier,s2_fevrier,s2_mars,s2_avril,s2_mai,s2_juin,s2_juillet,s2_octobre,s2_novembre,s2_decembre],
      },
      {
        label: "SERIE S3",
        lineTension: 0.3,
        backgroundColor: "rgb(255,255,255,0.1)",
        borderColor: "chocolate",

        data: [s3_janvier,s3_fevrier,s3_mars,s3_avril,s3_mai,s3_juin,s3_juillet,s3_octobre,s3_novembre,s3_decembre],
      },
      {
        label: "SERIE L1",
        lineTension: 0.3,
        backgroundColor: "rgb(255,255,255,0.1)",
        borderColor: "indigo",

        data: [l1_janvier,l1_fevrier,l1_mars,l1_avril,l1_mai,l1_juin,l1_juillet,l1_octobre,l1_novembre,l1_decembre],
      },
      {
        label: "SERIE L2",
        lineTension: 0.3,
        backgroundColor: "rgb(255,255,255,0.1)",
        borderColor: "pink",

        data: [l2_janvier,l2_fevrier,l2_mars,l2_avril,l2_mai,l2_juin,l2_juillet,l2_octobre,l2_novembre,l2_decembre],
      },
      {
        label: "SERIE L'",
        lineTension: 0.3,
        backgroundColor: "rgb(255,255,255,0.1)",
        borderColor: "fuchsia",

        data: [lp_janvier,lp_fevrier,lp_mars,lp_avril,lp_mai,lp_juin,lp_juillet,lp_octobre,lp_novembre,lp_decembre],
      },
      {
        label: "SERIE STEG",
        lineTension: 0.3,
        backgroundColor: "rgb(255,255,255,0.1)",
        borderColor: "blue",

        data: [steg_janvier,steg_fevrier,steg_mars,steg_avril,steg_mai,steg_juin,steg_juillet,steg_octobre,steg_novembre,steg_decembre],
      },
      {
        label: "SERIE T",
        lineTension: 0.3,
        backgroundColor: "rgb(255,255,255,0.1)",
        borderColor: "black",

        data: [t_janvier,t_fevrier,t_mars,t_avril,t_mai,t_juin,t_juillet,t_octobre,t_novembre,t_decembre],
      },
    ],
  },
  options: {
    responsive: true,
    // Echelle
    yAxes: [
      {
        ticks: {
          min: 0,
          maxTicksLimit: 10,
        },
      },
    ],
  },
});
