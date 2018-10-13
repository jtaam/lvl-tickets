<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://127.0.0.1:8888/public/cdn/jquery/v3.3.1/jquery-3.3.1.min.js"></script>
<script src="http://127.0.0.1:8888/public/cdn/jquery-slim/js/jquery-slim.min.js"></script>
<script src="http://127.0.0.1:8888/public/cdn/popper/popper.min.js"></script>
<script src="http://127.0.0.1:8888/public/cdn/bootstrap-4/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="{{asset('js/feather.min.js')}}"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="{{asset('js/Chart.min.js')}}"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
                data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            legend: {
                display: false,
            }
        }
    });
</script>
@stack('js')