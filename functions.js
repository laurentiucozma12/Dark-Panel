const ctx = document.getElementById('myChart').getContext('2d');

// Global Options
Chart.defaults.font.family = 'font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif';
Chart.defaults.font.size = 18;
Chart.defaults.color = '#9C9FAE' ;

const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: '',
            data: [10, 40, 80, 20, 5, 30, 45, 70, 35, 42, 38, 38],
            backgroundColor: ['#313131', '#313131', '#0EF1FF', '#313131', '#313131', '#313131', '#313131', '#32AC1E', '#313131', '#313131', '#313131', '#313131' ],
            borderWidth: 1,
            borderRadius: 12,
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false
            }
        }        
    }
});