
var mychart = $("#myChart").get(0).getContext("2d")//document.querySelector(`#myChart`).getContext('2d')
function barChart() {
    new Chart(mychart, {
        type: 'bar',
        data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
        }]
        },
        options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
        }
    })
}

//
function init() {
    barChart()
}