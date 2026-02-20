function createMiniAreaChart(selector, data, color) {
  return {
    chart: {
      height: 90,
      width: "100%",
      type: "area",
      toolbar: { show: false },
      sparkline: { enabled: true }
    },
    dataLabels: { enabled: false },
    stroke: {
      curve: "smooth",
      width: 3,
    },
    series: [{ name: "Performance", data: data }],
    grid: {
      borderColor: "transparent", // cleaner look
      strokeDashArray: 0,
      padding: { top: -10, right: 0, bottom: 0, left: 0 },
    },
    xaxis: { labels: { show: false }, axisBorder: { show: false }, axisTicks: { show: false } },
    yaxis: { labels: { show: false } },
    colors: [color],
    fill: {
      type: "gradient",
      gradient: {
        shadeIntensity: 0.9,
        opacityFrom: 0.45,
        opacityTo: 0.05,
        stops: [0, 90, 100]
      },
    },
    markers: {
      size: 4,
      strokeWidth: 2,
      strokeColors: "#fff",
      colors: [color],
      hover: { size: 7 },
    },
    tooltip: {
      theme: "dark",
      x: { show: false },
      y: {
        formatter: function (val) {
          return "$" + val + "k";
        },
      },
      marker: { show: false },
    },
  };
}

// Init Charts
var chart1 = new ApexCharts(
  document.querySelector("#revenue"),
  createMiniAreaChart("#revenue", [12, 18, 12, 21, 16, 32, 39], "#2f49d0")
);
chart1.render();

var chart2 = new ApexCharts(
  document.querySelector("#revenue2"),
  createMiniAreaChart("#revenue2", [8, 14, 12, 23, 19, 30, 22], "#1abc9c")
);
chart2.render();

var chart3 = new ApexCharts(
  document.querySelector("#revenue3"),
  createMiniAreaChart("#revenue3", [5, 8, 21, 16, 28, 10, 32], "#9b59b6")
);
chart3.render();

var chart4 = new ApexCharts(
  document.querySelector("#revenue4"),
  createMiniAreaChart("#revenue4", [15, 25, 22, 35, 50, 62, 80], "#f72b2b")
);
chart4.render();
