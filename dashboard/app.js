document.addEventListener('DOMContentLoaded', function () {
    var ctx1 = document.getElementById('revenueChart').getContext('2d');
    var revenueChart = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Revenue',
                data: [100, 200, 300, 400, 500, 600, 700],
                borderColor: 'blue',
                fill: false
            }]
        },
        options: {}
    });

    var ctx2 = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Sales',
                data: [100, 150, 250, 350, 450, 550, 650],
                backgroundColor: 'orange'
            }]
        },
        options: {}
    });

    var ctx3 = document.getElementById('salesComparisonChart').getContext('2d');
    var salesComparisonChart = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5'],
            datasets: [{
                label: 'Sales Comparison',
                data: [94, 85, 80, 70, 60],
                backgroundColor: 'yellow'
            }]
        },
        options: {}
    });

    var ctx4 = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctx4, {
        type: 'pie',
        data: {
            labels: ['VIP', 'Exclusive', 'Regular', 'Economic'],
            datasets: [{
                data: [10, 25, 30, 35],
                backgroundColor: ['red', 'blue', 'green', 'purple']
            }]
        },
        options: {}
    });
});