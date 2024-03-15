<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/styles/dashboard.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('layouts.sidebar')
            </div>
            <div class="col-10">
                <div>
                    @include('layouts.navbar')
                </div>
                <div>
                    @include('layouts.card')
                </div>
                <div class="chart row" id="chartjs">
                    <div class="col-6">
                        <canvas id="myChart" width="200" height="100"></canvas>
                    </div>
                    <div class="col-6 row">
                        <div class="col-6">
                            <canvas id="myDoughnutChart" width="600" height="600"></canvas>
                        </div>
                        <div class="col-6">
                            <canvas id="doughnutChart" width="600" height="600"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <script src="{{ asset('assets/js/donusChart.js') }}"></script>
    <script src="{{ asset('assets/js/donusChart2.js') }}"></script>
</body>

</html>
