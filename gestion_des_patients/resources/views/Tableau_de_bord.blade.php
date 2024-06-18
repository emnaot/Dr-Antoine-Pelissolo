<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tableau de bord</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png">
    <link href="admin/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="admin/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">

</head>

<body>
    @include('template')


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Bienvenue  {{ Auth::user()->name }} sur le tableau de bord!</h4>
                            <p class="mb-0">Statistiques générales de votre site</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tableau de bord</a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-users text-success" aria-hidden="true"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Patients</div>
                                    <div class="stat-digit">1245</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-medkit text-info" aria-hidden="true"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Traitement</div>
                                    <div class="stat-digit">756</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-calendar-check-o text-warning" aria-hidden="true"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Rendez-vous</div>
                                    <div class="stat-digit">342</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-one card-body">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa fa-envelope-o text-primary" aria-hidden="true"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text">Messages</div>
                                    <div class="stat-digit">1245</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="year-calendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="myPieChart"></canvas>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">

                        <!-- /# card -->
                    </div>

                </div>





            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Conçu &amp; Développé par <a href="http://meta-pixel.tn/" target="_blank">META PIXEL</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="admin/vendor/global/global.min.js"></script>
    <script src="admin/js/quixnav-init.js"></script>
    <script src="admin/js/custom.min.js"></script>

    <script src="admin/vendor/chartist/js/chartist.min.js"></script>

    <script src="admin/vendor/moment/moment.min.js"></script>
    <script src="admin/vendor/pg-calendar/js/pignose.calendar.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="admin/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

</body>
<script>
    // Get a reference to the canvas element
    var ctx = document.getElementById('myPieChart').getContext('2d');

    // Define your chart data
    var data = {
        labels: ['Féminin', 'Masculin'],
        datasets: [{
            data: [60, 40], // Your data values here
            backgroundColor: ['#dd4b39','#1da1f2'], // Colors for each slice
        }]
    };

    // Configure the chart options
    var options = {
        responsive: true,
        maintainAspectRatio: false,
    };

    // Create the pie chart
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });
</script>

</html>
