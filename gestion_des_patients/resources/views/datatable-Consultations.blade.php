</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Table-datatable-basic</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png">
    <!-- Datatable -->
    <link href="admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" rel="stylesheet" />



    <!-- Custom Stylesheet -->
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
                            <h4>Salut {{Auth::user()->name}} bienvenue!</h4>
                            <span class="ml-1">Table de données</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Tableau</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Table de données</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <h4 class="card-title">Tableau de données de base</h4>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                    Ajouter
                                  </button>
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Date_et_Heure</th>
                                                <th>Raison</th>
                                                <th>Diagnostic</th>
                                                <th>Prochain_Rendez_vous</th>
                                                <th>Statut</th>
                                                <th>Remarques</th>
                                                <th>Actions</th>



                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ( $Consultation as $c )
                                            <tr>
                                                <td>{{$c->Date_et_Heure}}</td>
                                                <td>{{$c->Raison}}</td>
                                                <td>{{$c->Diagnostic}}</td>
                                                <td>{{$c->Prochain_Rendez_vous}}</td>
                                                <td>{{$c->Statut}}</td>
                                                <td>{{$c->Remarques}}</td>




                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editConsultation{{$c->id}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg>
                                                    </button>
                                               <a onclick="return confirm('Voulez vous Vraiment supprimer cette ligne ?')"
                                               class='btn btn-danger btn-sm'href="/produit/delete/">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                              </svg>
                                              </span></a><br/>
                                         <a href="/ordonnance/{{$c->id}}" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
                                            </svg>
                                        </a>



                                                </td>

                                            </tr>
                                            @endforeach


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Date_et_Heure</th>
                                                <th>Raison</th>
                                                <th>Diagnostic</th>
                                                <th>Prochain_Rendez_vous</th>
                                                <th>Statut</th>
                                                <th>Remarques</th>
                                                <th>Actions</th>

                                            </tr>
                                        </tfoot>
                                    </table>
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



  <!-- Modal ajout -->
  <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter une consultation</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/addconsultation" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Choisir un patient</label>
                  <select name="id_Patient" id="dropdownSelectRendezVous" class="js-example-basic-single" style="width: 300px;" >
                    @foreach ( $Patient as $f )
                    <option value="{{$f->id}}">{{$f->Nom}} {{$f->Prénom}} {{$f->Date_de_naissance}}</option>
                    @endforeach
                  </select>


                  </div>

                <div class="mb-3">
                    <label for="Date_et_Heure" class="form-label">Date_et_Heure</label>
                    <input type="datetime-local" class="form-control" id="Date_et_Heure" name="Date_et_Heure" required>
                </div>
                <div class="mb-3">
                    <label for="Raison" class="form-label">Raison</label>
                    <textarea class="form-control" id="Raison" name="Raison"></textarea>
                </div>
                <div class="mb-3">
                    <label for="Diagnostic" class="form-label">Diagnostic</label>
                    <textarea class="form-control" id="Diagnostic" name="Diagnostic"></textarea>
                </div>

                <div class="mb-3">
                    <label for="Prochain_Rendez_vous" class="form-label">Prochain_Rendez_vous</label>
                    <input type="datetime-local" class="form-control" id="Prochain_Rendez_vous" name="Prochain_Rendez_vous" required>
                </div>
                <div class="mb-3">
                    <label for="statut" class="form-label">Statut</label>
                    <select class="form-control" id="statut" name="statut" required>
                        <option value="Annulé">Annulé</option>
                        <option value="Terminé">Terminé</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Remarques" class="form-label">Remarques</label>
                    <textarea class="form-control" id="Remarques" name="Remarques"></textarea>
                </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
        </div>
      </div>
    </div>
  </div>







    <!-- Modal d'édition pour la consultation -->
    @foreach ($Consultation as $c)
    <div class="modal fade" id="editConsultation{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="editConsultationTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editConsultationTitle">Édition de la consultation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/editconsultation/{{$c->id}}" method="post">
              @csrf
              <!-- Champ pour la date et l'heure -->
              <div class="mb-3">
                <label for="Date_et_Heure" class="form-label">Date et Heure</label>
                <input type="datetime-local" class="form-control" id="Date_et_Heure" name="Date_et_Heure" value="{{$c->Date_et_Heure}}" required>
              </div>
              <!-- Champ pour la raison -->
              <div class="mb-3">
                <label for="Raison" class="form-label">Raison</label>
                <textarea class="form-control" id="Raison" name="Raison">{{$c->Raison}}</textarea>
              </div>
              <!-- Champ pour le diagnostic -->
              <div class="mb-3">
                <label for="Diagnostic" class="form-label">Diagnostic</label>
                <textarea class="form-control" id="Diagnostic" name="Diagnostic">{{$c->Diagnostic}}</textarea>
              </div>
              <!-- Champ pour le prochain rendez-vous -->
              <div class="mb-3">
                <label for="Prochain_Rendez_vous" class="form-label">Prochain Rendez-vous</label>
                <input type="datetime-local" class="form-control" id="Prochain_Rendez_vous" name="Prochain_Rendez_vous" value="{{$c->Prochain_Rendez_vous}}" required>
              </div>
              <!-- Champ pour le statut -->
              <div class="mb-3">
                <label for="Statut" class="form-label">Statut</label>
                <select class="form-control" id="Statut" name="Statut" required>
                  <option value="Annulé" @if($c->Statut == 'Annulé') selected @endif>Annulé</option>
                  <option value="Terminé" @if($c->Statut == 'Terminé') selected @endif>Terminé</option>
                </select>
              </div>
              <!-- Champ pour les remarques -->
              <div class="mb-3">
                <label for="Remarques" class="form-label">Remarques</label>
                <textarea class="form-control" id="Remarques" name="Remarques">{{$c->Remarques}}</textarea>
              </div>
              <!-- ... (boutons de soumission et d'annulation) ... -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endforeach







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



    <!-- Datatable -->
    <script src="admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="admin/js/plugins-init/datatables.init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>
    <script>
       $(document).ready(function() {
  $('#dropdownSelectRendezVous').select2();
  $('#dropdownSelectConsultation').select2();
});
      </script>
</body>

</html>
