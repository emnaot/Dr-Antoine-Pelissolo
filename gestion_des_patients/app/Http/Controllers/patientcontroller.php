<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class patientcontroller extends Controller
{
    public function showPatient()
    {
        $Patient = Patient::all();
        return view('datatable-Patients', ['Patient' => $Patient]);
    }
    public function Add(Request $request)
    {

        $Patient = new  Patient;
        $Patient->Nom=$request->name;
        $Patient->Prénom=$request->prenom;
        $Patient->Age=$request->age;
        $Patient->E_mail=$request->email;
        $Patient->Numéro_de_téléphone=$request->phone;


        $Patient->save();


    }




    public function AddPatient(Request $request)
    {

        $Patient = new  Patient;
        $Patient->Nom=$request->nom;
        $Patient->Prénom=$request->prenom;
        $Patient->Age=$request->age;
        $Patient->Sexe=$request->sexe;
        $Patient->Date_de_naissance=$request->date_naissance;
        $Patient->Adresse=$request->adresse;
        $Patient->Numéro_de_téléphone=$request->telephone;
        $Patient->E_mail=$request->email;
        $Patient->Statut=$request->statut;
        $Patient->Remarques=$request->remarques;


        $Patient->save();
         // Redirigez l'utilisateur vers la page des patients avec un message de succès
         return redirect()->route('patients.index')->with('success', 'Patient mis à jour avec succès.');


    }

    public function updatepatient(Request $request, $id)
    {
        // Validez les données du formulaire, assurez-vous que les règles de validation sont appropriées.

        // Récupérez le patient à éditer en fonction de l'ID passé en paramètre
        $patient = Patient::find($id);

        // Vérifiez si le patient existe
        if (!$patient) {
            return redirect()->route('/editpatient/{id}')->with('error', 'Patient non trouvé.');
        }

        // Mettez à jour les propriétés du patient avec les données du formulaire
        $patient->Nom = $request->input('nom');
        $patient->Prénom = $request->input('prenom');
        $patient->Age = $request->input('age');
        $patient->Sexe = $request->input('sexe');
        $patient->Date_de_naissance = $request->input('date_naissance');
        $patient->Adresse = $request->input('adresse');
        $patient->Numéro_de_téléphone = $request->input('telephone');
        $patient->E_mail = $request->input('email');
        $patient->Statut = $request->input('statut');
        $patient->Remarques = $request->input('remarques');

        // Enregistrez les modifications
        $patient->save();

        // Redirigez l'utilisateur vers la page des patients avec un message de succès
        return redirect()->route('patients.index')->with('success', 'Patient mis à jour avec succès.');
    }



}
