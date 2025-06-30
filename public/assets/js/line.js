$(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var periode = $('#periode').val();
    var total = $('#total').val();

    var arraytotal = total.split(",");
    var arrayperiode = periode.split(",");


    var ctx = $("#line-logarithmic");

    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,

        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Tanggal'
                }
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Value'
                }
            }]
        }
    };

    var chartData = {
        labels: arrayperiode,
        datasets: [{
            label: "Total",
            data: arraytotal,
            lineTension: 0,
            fill: false,
            borderColor: "#f0ad4e",
            pointBorderColor: "#f0ad4e",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
        }]
    };

    

    var config = {
        type: 'line',

        // Chart Options
        options : chartOptions,

        // Chart Data
        data : chartData
    };

    // Create the chart
    var logarithmicChart = new Chart(ctx, config);

});