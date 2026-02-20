function createRadialChart(selector, value, colorFrom, colorTo) {
  var options = {
    series: [value],
    chart: {
      type: "radialBar",
      width: 80,   // ⬅️ reduced size
      height: 80,  // ⬅️ reduced size
      sparkline: { enabled: true }
    },
    colors: [colorFrom],
    plotOptions: {
      radialBar: {
        hollow: {
          size: "60%", // adjust hollow for smaller chart
        },
        track: {
          background: "#f1f3f7",
          strokeWidth: "90%",
        },
        dataLabels: {
          name: { show: false },
          value: {
            show: true,
            fontSize: "14px", // smaller text to fit
            fontWeight: 600,
            color: "#111",
            offsetY: 3, // keeps centered in small circle
            formatter: (val) => Math.round(val) + "%"
          }
        }
      }
    },
    fill: {
      type: "gradient",
      gradient: {
        shade: "light",
        type: "vertical",
        gradientToColors: [colorTo],
        stops: [0, 100]
      }
    },
    stroke: {
      lineCap: "round"
    }
  };

  var chart = new ApexCharts(document.querySelector(selector), options);
  chart.render();
}

// Radial charts
createRadialChart("#radial1", 80, "#2f49d0", "#00c6ff");
createRadialChart("#radial2", 70, "#28a745", "#85e085");
createRadialChart("#radial3", 60, "#f72b2b", "#ff9a9e");