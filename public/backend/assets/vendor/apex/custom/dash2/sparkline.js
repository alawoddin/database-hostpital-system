function createSparkline(selector, data, color, name) {
  var options = {
    chart: {
      height: 100,
      width: "100%",
      type: "area",
      toolbar: { show: false },
      sparkline: { enabled: true },
    },
    series: [{ name: name, data: data }],
    stroke: { curve: "smooth", width: 3 },
    fill: {
      type: "gradient",
      gradient: {
        shade: "light",
        type: "vertical",
        shadeIntensity: 0.3,
        gradientToColors: [color],
        opacityFrom: 0.6,
        opacityTo: 0.1,
        stops: [0, 100],
      },
    },
    colors: [color],
    markers: {
      size: 0,
      hover: { size: 6 },
    },
    grid: { show: false, padding: { top: 0, bottom: 0, left: 0, right: 0 } },
    xaxis: { labels: { show: false }, axisTicks: { show: false }, axisBorder: { show: false } },
    yaxis: { labels: { show: false } },
    tooltip: {
      y: { formatter: function (val) { return val + "k"; } },
    },
  };

  var chart = new ApexCharts(document.querySelector(selector), options);
  chart.render();
}

// Sparkline charts with descriptive names
createSparkline("#sparkline1", [10, 30, 15, 25, 45, 30, 60], "#2f49d0", "Likes");
createSparkline("#sparkline2", [12, 28, 18, 35, 40, 32, 55], "#17a2b8", "Views");
createSparkline("#sparkline3", [8, 25, 20, 30, 38, 28, 50], "#28a745", "Users");
createSparkline("#sparkline4", [15, 35, 25, 40, 50, 38, 65], "#f72b2b", "Earnings");
