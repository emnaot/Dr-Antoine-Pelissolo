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
                            <div class="card-header">
                                <h4 class="card-title">Collections de frais et dépenses</h4>
                            </div>
                            <div class="card-body">
                                <div class="ct-bar-chart mt-5"></div>
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

                </div>
                <div class="row">

                    <div class="col-xl-4 col-lg-6 col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tableau d'affichage</h4>
                            </div>
                            <div class="card-body">
                                <div class="recent-comment m-t-15">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object mr-3" src="admin/images/avatar/4.png" alt="..."></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-primary">John Larson</h4>
                                            <p> Le Dr. Antoine Pelissolo offre bien plus qu'une expertise en psychiatrie. Son site web est une ressource inestimable pour gérer mes rendez-vous, accéder à des informations pertinentes et améliorer ma santé mentale dans l'ensemble</p>
                                            <p class="comment-date">10 min ago</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object mr-3" src="admin/images/avatar/2.png" alt="..."></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-success">Sophie R</h4>
                                            <p> Le site du Dr. Antoine Pelissolo a changé la donne pour ma santé mentale. Les fonctionnalités de suivi et d'organisation sont une extension de son dévouement envers ses patients. Je suis très satisfait de mon expérience globale</p>
                                            <p class="comment-date">1 hour ago</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object mr-3" src="admin/images/avatar/3.png" alt="..."></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-danger">Louis C</h4>
                                            <p>Le site du Dr. Antoine Pelissolo a transformé ma façon d'aborder ma santé mentale. Les fonctionnalités de prise de rendez-vous en ligne, de suivi des consultations et d'organisation des opérations administratives ont grandement simplifié mon parcours vers le bien-être mental.</p>
                                            <div class="comment-date">Yesterday</div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object mr-3" src="admin/images/avatar/4.png" alt="..."></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-primary">John Larson</h4>
                                            <p> Ce site a été ma bouée de sauvetage pendant une période difficile. Les séances avec le psychiatre m'ont aidé à retrouver ma confiance en moi et à retrouver ma vie en main.</p>
                                            <p class="comment-date">10 min ago</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object mr-3" src="admin/images/avatar/2.png" alt="..."></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-success">Maxime G</h4>
                                            <p> Je suis si reconnaissant d'avoir trouvé le site du Dr. Antoine Pelissolo. Non seulement j'ai accès à ses connaissances en psychiatrie, mais aussi à une plateforme qui facilite la gestion de mes rendez-vous et le suivi de mon progrès.</p>
                                            <p class="comment-date">1 hour ago</p>
                                        </div>
                                    </div>
                                    <div class="media no-border">
                                        <div class="media-left">
                                            <a href="#"><img class="media-object mr-3" src="admin/images/avatar/3.png" alt="..."></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-info">Mr. John</h4>
                                            <p>Le site du Dr. Antoine Pelissolo a changé la donne pour ma santé mentale. Les fonctionnalités de suivi et d'organisation sont une extension de son dévouement envers ses patients. Je suis très satisfait de mon expérience globale</p>
                                            <div class="comment-date">Yesterday</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-12 col-xxl-6 col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="social-graph-wrapper widget-facebook">
                                        <span class="s-icon"><i class="fa fa-facebook"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 border-right">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">1</span> k</h4>
                                                <p class="m-0">Amis</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">11</span> k</h4>
                                                <p class="m-0">abonnés</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="social-graph-wrapper widget-linkedin">
                                        <span class="s-icon"><i class="fa fa-linkedin"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 border-right">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">1</span> k</h4>
                                                <p class="m-0">Connections</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">19</span> k</h4>
                                                <p class="m-0">abonnés</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="social-graph-wrapper widget-googleplus">
                                        <span class="s-icon"><i class="fa fa-google-plus"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 border-right">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">8</span> k</h4>
                                                <p class="m-0">Amis</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">1</span> k</h4>
                                                <p class="m-0">abonnés</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="social-graph-wrapper widget-twitter">
                                        <span class="s-icon"><i class="fa fa-twitter"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 border-right">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">1</span> k</h4>
                                                <p class="m-0">Amis</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">2</span> k</h4>
                                                <p class="m-0">abonnés</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="year-calendar"></div>
                            </div>
                        </div>
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
