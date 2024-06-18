<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ordonnance Médicale</title>
    <style>
        /* Styles personnalisés pour le PDF */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f6fd;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #007bff;
        }
        .patient-info, .doctor-info, .ordonnance-description, .signature {
            margin-bottom: 20px;
        }
        .patient-info p, .doctor-info p {
            color: #333;
            margin: 0;
        }
        .doctor-name {
            font-weight: bold;
            color: #007bff;
        }
        .ordonnance-description p {
            line-height: 1.4;
            color: #555;
        }
        .signature p {
            text-align: right;
            margin-top: 40px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Ordonnance Médicale</h1>
        </div>

        <div class="patient-info">
            <p><strong>Nom du Patient:</strong> {{ $data[0]->Nom }}</p>
            <p><strong>Prénom du Patient:</strong>{{ $data[0]->Prénom}}</p>
        </div>

        <div class="doctor-info">
            <p><strong>Nom du Docteur:</strong> <span class="doctor-name"></span></p>
        </div>

        <div class="ordonnance-description">
            <p><strong>Description de l'Ordonnance:</strong> {{ $data[0]->Description}}</p>
            <p></p>
        </div>

        <div class="signature">
            <p>Signature du Docteur: __________________________</p>
            <p>Date: __________________________</p>
        </div>
    </div>
</body>
</html>
