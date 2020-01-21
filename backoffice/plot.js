function plot(){
    var trace1 = {
        type: 'bar',
        x: [1, 2, 3, 4],
        y: [5, 10, 2, 8],
        marker: {
            color: '#C8A2C8',
            line: {
                width: 2.5
            }
        }
    };

    var data = [ trace1 ];

    var layout = {
        title: 'Responsive to window\'s size!',
        font: {size: 18}
    };

    Plotly.newPlot('plot', data, layout, {responsive: true});
}