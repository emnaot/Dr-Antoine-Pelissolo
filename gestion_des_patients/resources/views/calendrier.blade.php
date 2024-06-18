<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>calendrier</title>
    <!-- Favicon icon -->
    <link rel="icon" type="admin/image/png" sizes="16x16" href="admin/images/favicon.png">

    <link href="admin/vendor/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
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
                            <h4>Bienvenue dans le calendrier!</h4>
                            <p class="mb-0">Gestion des Rendez-vous des Patients</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Agenda des Consultations</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-intro-title">Agenda des Consultations</h4>

                                <div class="">
                                    <div id="external-events" class="my-3">
                                        <p>Faites glisser et déposez votre événement ou cliquez dans le calendrier</p>
                                        <div class="external-event" data-class="bg-info"><i class="fa fa-move"></i>Nouveau Rendez-vous</div>
                                        <div class="external-event" data-class="bg-primary"><i class="fa fa-move"></i>Mon Rendez-vous
                                        </div>
                                        <div class="external-event" data-class="bg-warning"><i class="fa fa-move"></i>Réunion avec le Patient</div>
                                        <div class="external-event" data-class="bg-success"><i class="fa fa-move"></i>Séance de Groupe</div>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="checkbox checkbox-event pt-3 pb-5">
                                        <input id="drop-remove" class="styled-checkbox" type="checkbox">
                                        <label class="ml-2 mb-0" for="drop-remove">Supprimer Après Déplacement</label>
                                    </div>
                                    <a href="javascript:void()" data-toggle="modal" data-target="#add-category" class="btn btn-primary btn-event w-100">
                                        <span class="align-middle"><i class="ti-plus"></i></span> Ajouter Nouveau
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar" class="app-fullcalendar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Ajouter Nouveau Rendez-vous</strong></h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Créer Rendez-vous</button>

                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-category">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Ajouter une Catégorie</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Nom de la Catégorie</label>
                                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Choisir la Couleur de la Catégorie</label>
                                                <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                    <option value="success">Succès</option>
                                                   <!-- <option value="danger">Danger</option>-->
                                                    <option value="info">Info</option>
                                                   <!-- <option value="pink">Rose</option>-->
                                                    <option value="primary">Principal</option>
                                                    <option value="warning">Avertissement</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Sauvegarder</button>
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
    <!--removeIf(production)-->
    <!-- Demo scripts -->
    <script src="admin/js/styleSwitcher.js"></script>



    <script src="admin/vendor/jqueryui/js/jquery-ui.min.js"></script>
    <script src="admin/vendor/moment/moment.min.js"></script>

    <script src="admin/vendor/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="admin/js/plugins-init/fullcalendar-init.js"></script>

</body>

</html>
