var options = {
  chart: {
    height: 300,
    type: "area",
    toolbar: { show: false },
    stacked: false,
  },
  dataLabels: { enabled: false },
  stroke: {
    curve: "smooth",
    width: [0, 3], // Column width 0 for bars, 3 for area line
  },
  plotOptions: {
    bar: {
      columnWidth: "50%",
      borderRadius: 6, // rounded columns
    },
  },
  series: [
    {
      name: "Sales",
      type: "column",
      data: [10, 40, 15, 40, 20, 35, 20, 10, 31, 43, 56, 29],
    },
    {
      name: "Revenue",
      type: "area",
      data: [2, 8, 25, 7, 20, 20, 51, 35, 42, 20, 33, 67],
    },
  ],
  grid: {
    borderColor: "#f0f2f5",
    strokeDashArray: 5,
    xaxis: { lines: { show: true } },
    yaxis: { lines: { show: false } },
    padding: { top: 10, right: 0, bottom: 0, left: 0 },
  },
  xaxis: {
    categories: [
      "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ],
    axisBorder: { show: false },
    axisTicks: { show: false },
  },
  yaxis: { labels: { show: false } },
  colors: ["#2f49d0", "#66a4ff"],
  fill: {
    type: ["solid", "gradient"],
    gradient: {
      shade: "light",
      type: "vertical",
      gradientToColors: ["#66a4ff"],
      opacityFrom: 0.4,
      opacityTo: 0.05,
      stops: [0, 100],
    },
  },
  markers: {
    size: 4,
    hover: { size: 7 },
  },
  tooltip: {
    shared: true,
    intersect: false,
    theme: "dark",
  },
};

var chart = new ApexCharts(document.querySelector("#traffic"), options);
chart.render();
