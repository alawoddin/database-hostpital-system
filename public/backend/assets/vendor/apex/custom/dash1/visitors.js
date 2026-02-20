var options = {
  chart: {
    height: 350,
    type: "radialBar",
    toolbar: { show: false },
  },
  plotOptions: {
    radialBar: {
      hollow: {
        size: "45%",
      },
      dataLabels: {
        name: {
          fontSize: "14px",
          color: "#5f6b7a",
        },
        value: {
          fontSize: "22px",
          color: "#111",
          fontWeight: 600,
        },
        total: {
          show: true,
          label: "Total",
          fontSize: "14px",
          color: "#111",
          formatter: function (w) {
            return 150;
          },
        },
      },
      track: {
        background: "#e9edf5",
        strokeWidth: "90%",
        margin: 8,
      },
    },
  },
  series: [80, 70],
  labels: ["Visitors", "Clicks"],
  colors: ["#2f49d0", "#f72b2b"],
  legend: {
    show: true,
    position: "bottom",
    fontSize: "13px",
    labels: { colors: "#5f6b7a" },
    markers: { radius: 12 },
  },
};

var chart = new ApexCharts(document.querySelector("#visitors"), options);
chart.render();
