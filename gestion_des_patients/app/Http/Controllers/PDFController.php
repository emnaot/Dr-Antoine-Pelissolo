<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Patient;
use App\Models\consultation;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $data = DB::table('ordonnances')
            ->join('patients', 'ordonnances.id_Patient', '=', 'patients.id')
            ->join('consultations', 'ordonnances.id_Consultation', '=', 'consultations.id')
            ->select('ordonnances.id', 'patients.Nom', 'patients.Prénom', 'ordonnances.Description', 'consultations.Date_et_Heure')
            ->where('consultations.id', $id)
            ->get()
            ->toArray(); // Convertissez la collection en un tableau associatif

        $pdf = PDF::loadView('pdf', ['data' => $data]);

        return $pdf->download('votre-fichier-pdf.pdf');
    }



}

