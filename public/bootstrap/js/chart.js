$.ajax({
    url: '//www.google.com/jsapi',
    dataType: 'script',
    cache: true,
    success: function() {
        google.load('visualization', '1', {
            'packages': ['corechart'],
            'callback': drawStuff
        });
    }
});

function drawStuff() {
    console.log('foo');
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['Strongly Agree', 3],
        ['Agree', 1],
        ['DisAgree', 1],
        ['Agree', 1],
        ['Strongly Agree', 2]
    ]);

    // Set chart options
    var options = {
        'title': 'Agreement'
        //        'width': 600,
        //        'height': 300
    };

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart'));
    chart.draw(data, options);
};

$(document).ready(function() {

})

    $.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
    $.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){

        Morris.Bar({
            element: 'bar-example',
            data: [
                {y: 'Jan 2014', a: 100},
                {y: 'Feb 2014', a: 75},
                {y: 'Mar 2014', a: 50},
                {y: 'Jun 2014', a: 75}
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Visitors', 'Conversions']
        });
    });
});