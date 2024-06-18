<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordonnance;
use App\Models\Consultation;
use Illuminate\Support\Facades\DB;

class ordonnancecontroller extends Controller
{
    public function showOrdonnance()
    {
        $Ordonnance= DB::table('ordonnances')
        ->join('patients','ordonnances.id_Patient','=','patients.id')
        ->join('consultations', 'ordonnances.id_Consultation', '=', 'consultations.id')
        ->select('ordonnances.id','patients.Nom', 'patients.Prénom', 'ordonnances.Description', 'consultations.Date_et_Heure')
        ->get();


        return view('datatable-Ordonnances', ['Ordonnance' => $Ordonnance]);
    }







    public function updateordonnance(Request $request, $id)
    {
        // Validez les données du formulaire, assurez-vous que les règles de validation sont appropriées.

        // Récupérez l'ordonnance à éditer en fonction de l'ID passé en paramètre
        $ordonnance = Ordonnance::find($id);

        // Vérifiez si l'ordonnance existe
        if (!$ordonnance) {
            return redirect()->route('ordonnances.index')->with('error', 'Ordonnance non trouvée.');
        }

        // Mettez à jour les propriétés de l'ordonnance avec les données du formulaire
        $ordonnance->Description = $request->input('description');

        // Enregistrez les modifications
        $ordonnance->save();

        // Redirigez l'utilisateur vers la page des ordonnances avec un message de succès
        return redirect()->route('ordonnances.index')->with('success', 'Ordonnance mise à jour avec succès.');
    }













    public function enregistrerOrdonnance(Request $request)
    {

        $Ordonnance = new  Ordonnance;
        $Ordonnance->description=$request->description;
        $Ordonnance->id_Patient=$request->id_Patient;
      //  dd($request->id_Patient);
        $Ordonnance->id_Consultation=$request->id_Consultation;
        $Ordonnance->save();

        return redirect('/datatable-Ordonnances')->with('success', 'Ordonnance enregistrée avec succès.');
    }










}
