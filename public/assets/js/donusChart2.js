var data = {
    labels: ['A', 'B', 'C', 'D', 'E'],
    datasets: [{
        label: 'My Doughnut Chart',
        data: [10, 20, 30, 40, 50],
        backgroundColor: [
            'rgba(255, 99, 132, 0.5)',
            'rgba(54, 162, 235, 0.5)',
            'rgba(255, 206, 86, 0.5)',
            'rgba(75, 192, 192, 0.5)',
            'rgba(153, 102, 255, 0.5)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)'
        ],
        borderWidth: 1
    }]
};

// Cấu hình biểu đồ
var options = {
    responsive: true,
    plugins: {
        legend: {
            position: 'top',
        },
        title: {
            display: true,
            text: 'Custom Doughnut Chart'
        }
    }
};

// Lấy thẻ canvas
var ctx = document.getElementById('doughnutChart').getContext('2d');

// Vẽ biểu đồ
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: options
});