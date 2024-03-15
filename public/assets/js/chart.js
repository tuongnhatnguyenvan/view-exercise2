var data = {
    labels: ["January", "February", "March", "April", "May", "June"],
    datasets: [
        {
            label: "Column Dataset",
            backgroundColor: "rgba(255, 99, 132, 0.2)",
            borderColor: "rgba(255, 99, 132, 1)",
            borderWidth: 1,
            data: [65, 59, 80, 81, 56, 55],
        },
        {
            label: "Line Dataset",
            borderColor: "rgba(54, 162, 235, 1)",
            borderWidth: 2,
            type: "line",
            data: [65, 59, 80, 81, 56, 55],
        },
    ],
};

// Cấu hình biểu đồ
var options = {
    scales: {
        y: {
            beginAtZero: true,
        },
    },
};

// Lấy thẻ canvas
var ctx = document.getElementById("myChart").getContext("2d");

// Vẽ biểu đồ
var myChart = new Chart(ctx, {
    type: "bar",
    data: data,
    options: options,
});
