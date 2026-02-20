var options = {
  chart: {
    height: 350,
    type: "bar",
    stacked: true,
    toolbar: { show: false },
    animations: {
      enabled: true,
      easing: "easeinout",
      speed: 800,
      animateGradually: { enabled: true, delay: 150 },
      dynamicAnimation: { enabled: true, speed: 400 }
    }
  },
  plotOptions: {
    bar: {
      columnWidth: "40%",
      borderRadius: 8,
      borderRadiusApplication: "end",
    },
  },
  dataLabels: {
    enabled: false,
  },
  series: [
    {
      name: "Balance",
      data: [52, 73, 34, 66, 82, 49, 38, 59, 44, 86, 30, 60],
    },
    {
      name: "Expenses",
      data: [32, 43, 24, 36, 33, 29, 18, 29, 14, 56, 20, 30],
    },
  ],
  legend: {
    show: true,
    position: "top",
    horizontalAlign: "right",
    fontSize: "14px",
    markers: {
      radius: 12,
    },
  },
  xaxis: {
    categories: [
      "Jan", "Feb", "Mar", "Apr", "May", "Jun",
      "Jul", "Aug", "Sep", "Oct", "Nov", "Dec",
    ],
    axisBorder: { show: false },
    axisTicks: { show: false },
    labels: {
      show: true,
      rotate: -25,
      style: {
        fontSize: "12px",
        colors: "#5f6b7a"
      }
    },
  },
  yaxis: {
    labels: {
      style: { colors: "#5f6b7a", fontSize: "12px" }
    },
    axisBorder: { show: false },
    axisTicks: { show: false },
  },
  grid: {
    borderColor: "#e5e9f2",
    strokeDashArray: 5,
    xaxis: { lines: { show: false } },
    yaxis: { lines: { show: true } },
  },
  tooltip: {
    theme: "dark",
    y: {
      formatter: function (val) {
        return val + "M";
      },
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      shade: "light",
      type: "vertical",
      shadeIntensity: 0.25,
      gradientToColors: undefined,
      inverseColors: true,
      opacityFrom: 0.9,
      opacityTo: 1,
    },
  },
  colors: ["#2f49d0", "#f72b2b"],
};

var chart = new ApexCharts(document.querySelector("#salesReport"), options);
chart.render();
