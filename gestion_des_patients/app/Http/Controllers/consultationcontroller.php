<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Consultation;
use Illuminate\Support\Facades\DB;


class consultationcontroller extends Controller
{
    public function showConsultation()
    {
        $Consultation =Consultation::all();
        $Patient =Patient::all();

        return view('datatable-Consultations', ['Consultation' => $Consultation,'Patient' => $Patient]);
    }







    public function AddConsultation(Request $request)
    {

        $Consultation = new  Consultation;
        $Consultation->id_Patient=$request->id_Patient;
        $Consultation->Date_et_Heure=$request->Date_et_Heure;
        $Consultation->Raison=$request->Raison;
        $Consultation->Diagnostic=$request->Diagnostic;
        $Consultation->Prochain_Rendez_vous=$request->Prochain_Rendez_vous;
        $Consultation->Statut=$request->statut;
        $Consultation->Remarques=$request->Remarques;



        $Consultation->save();
        return redirect()->route('consultations.index')->with('success', 'Consultation mise à jour avec succès.');



    }



    public function updateconsultation(Request $request, $id)
{
    // Validez les données du formulaire, assurez-vous que les règles de validation sont appropriées.

    // Récupérez la consultation à éditer en fonction de l'ID passé en paramètre
    $consultation = Consultation::find($id);



    // Mettez à jour les propriétés de la consultation avec les données du formulaire
    $consultation->Date_et_Heure = $request->input('Date_et_Heure');
    $consultation->Raison = $request->input('Raison');
    $consultation->Diagnostic = $request->input('Diagnostic');
    $consultation->Prochain_Rendez_vous = $request->input('Prochain_Rendez_vous');
    $consultation->Statut = $request->input('Statut');
    $consultation->Remarques = $request->input('Remarques');

    // Enregistrez les modifications
    $consultation->save();

    // Redirigez l'utilisateur vers la page des consultations avec un message de succès
    return redirect()->route('consultations.index')->with('success', 'Consultation mise à jour avec succès.');
}



public function showordonnance($id)
    {

       $Consultation  =DB::table('consultations')
        ->join('patients','consultations.id_Patient','=','patients.id')
        ->select('patients.id','patients.Nom', 'patients.Prénom', 'patients.Date_de_naissance', 'patients.Numéro_de_téléphone',
        'consultations.id as IdC', 'consultations.Date_et_Heure')
        ->where('consultations.id',$id)
        ->get();

        return view('Ordonnance',['Consultation'=> $Consultation]);
    }






}



