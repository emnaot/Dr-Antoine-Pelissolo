<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prescriptions des patients</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png">
        <!-- Custom Stylesheet -->

        <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container-fluid {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    margin-top: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}

.btn-primary:hover {
    background-color: #0056b3;
}

        </style>

<style>
    .inline-h6 {

    margin-right: 20px; /* Vous pouvez ajuster la marge selon vos besoins */
}
</style>



</head>



<body>
    @include('template')
<!--**********************************
            Content body start
        ***********************************-->

    <div class="content-body">

        <div class="container-fluid">
            <!-- Autres éléments de votre page ici -->

            <form action="/enregistrer-ordonnance" method="POST">
                @csrf
                <div class="form-group">
                    <h6 class="inline-h6"><span style="color: #1977cc;">Nom:</span> {{$Consultation[0]->Nom}}</h6>
                    <h6 class="inline-h6"><span style="color: #1977cc;">Prénom:</span> {{$Consultation[0]->Prénom}}</h6>
                    <h6 class="inline-h6"><span style="color: #1977cc;">Date_de_naissance:</span> {{$Consultation[0]->Date_de_naissance}}</h6>
                    <h6 class="inline-h6"><span style="color: #1977cc;">Numéro_de_téléphone:</span> {{$Consultation[0]->Numéro_de_téléphone}}</h6>
                    <h6 class="inline-h6"><span style="color:#1977cc;">Date_et_Heure:</span> {{$Consultation[0]->Date_et_Heure}}</h6>

            <br/>
                    <label for="description" class="inline-h6">Ordonnance:</label>
                    <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                    <input type="hidden" name="id_Patient" value="{{$Consultation[0]->id}}">
                    <input type="hidden" name="id_Consultation" value="{{$Consultation[0]->IdC}}">
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
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
        Scripts
    ***********************************-->
    <!-- Required vendors -->




    <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin/js/quixnav-init.js')}}"></script>
    <script src="{{asset('admin/js/custom.min.js')}}"></script>



</body>
</html>
