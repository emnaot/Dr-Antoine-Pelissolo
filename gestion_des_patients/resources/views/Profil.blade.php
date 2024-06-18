
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Profil</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png">
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
                            <h4>Bienvenue sur le Profil Administrateur!</h4>
                            <p class="mb-0">Gestionnaire de profil pour {{Auth::user()->name}}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profil</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                    <div class="profile-photo">
                                        <img  class="img-fluid rounded-circle" src="uploads/{{Auth::user()->image}}" >
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary"> {{Auth::user()->name}}</h4>
                                                        <p>{{Auth::user()->role}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted">{{Auth::user()->email}}</h4>
                                                        <p>E-mail
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted">(+1) 321-837-1030</h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div> -->
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
                                <div class="profile-blog pt-3 border-bottom-1 pb-1">
                                    <h5 class="text-primary d-inline">Faits Marquants Aujourd'hui</h5>
                                    <img src="admin/images/profile/1.jpg" alt="" class="img-fluid mt-4 mb-4 w-100">
                                    <h4>Nouvelle Approche Thérapeutique</h4>
                                    <p>Découvrez notre nouvelle approche thérapeutique innovante pour traiter l'anxiété et le stress. En savoir plus sur comment nous aidons nos patients à retrouver leur bien-être mental.</p>
                                </div>
                                <div class="profile-interest mt-4 pb-2 border-bottom-1">
                                    <h5 class="text-primary d-inline">Intérêts</h5>
                                    <div class="row mt-4">
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="admin/images/profile/2.jpg" alt="" class="img-fluid">
                                                <p>Thérapie Holistique</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="admin/images/profile/3.jpg" alt="" class="img-fluid">
                                                <p>Méditation et Mindfulness<</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="admin/images/profile/4.jpg" alt="" class="img-fluid">
                                                <p>Conférences &amp; Ateliers</p>
                                            </a>
                                        </div>



                                    </div>
                                </div>
                                <div class="profile-news mt-4 pb-3">
                                    <h5 class="text-primary d-inline">Nos Dernières Actualités</h5>
                                    <div class="media pt-3 pb-3">
                                        <img src="admin/images/profile/5.jpg" alt="image" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="m-b-5">Nouvelle Approche de Gestion du Stress</h5>
                                            <p>J'ai partagé cette nouvelle approche de gestion du stress dans ma pratique et j'ai constaté d'excellents résultats auprès de mes patients.</p>
                                        </div>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img src="admin/images/profile/6.jpg" alt="image" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="m-b-5">Atelier de Pleine Conscience</h5>
                                            <p>Nous organisons un atelier de pleine conscience la semaine prochaine. Rejoignez-nous pour découvrir les bienfaits de la méditation.</p>
                                        </div>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img src="admin/images/profile/7.jpg" alt="image" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="m-b-5">Importance de la Santé Mentale</h5>
                                            <p>Dans cet article, je discute de l'importance de prendre soin de sa santé mentale et des différentes approches disponibles.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">

                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">À propos de moi</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Paramètre du compte</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">

                                            <div id="about-me" class="tab-pane fade active show">
                                                <div class="profile-personal-info">
                                                    <div class=" border-bottom-1 pb-4">
                                                        <h4 class="pt-3 text-primary ">Informations personnelles</h4>
                                                    </div>


                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Nom du utilisateur<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{Auth::user()->name}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">E-mail<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{Auth::user()->email}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Disponibilité<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>7/24</span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <!-- -->
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Paramètre du compte</h4>
                                                        <form>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>E-mail</label>
                                                                    <input type="email" value="{{Auth::user()->email}}" placeholder="Email" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Mot de passe</label>
                                                                    <input type="password" placeholder="Password" class="form-control">
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Modifier</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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


</body>

</html>
