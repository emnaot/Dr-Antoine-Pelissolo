<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rendez_vous;
use App\Models\Patient;


class rendez_vouscontroller extends Controller
{
    public function showRendez_vous()
    {
        $Rendez_vous =Rendez_vous::all();
        $Patient =Patient::all();
        return view('datatable-Rendez-vous', ['Rendez_vous' => $Rendez_vous,'Patient' => $Patient]);
    }

    public function Add(Request $request)
    {
        $verif =Patient::select('E_mail')->where('E_mail', $request->email)->first();

        if ($verif!=null) {
            $idP =Patient::select('id')->where('E_mail', $request->email)->first();
            $Rendez_vous = new Rendez_vous;
            $Rendez_vous->Date = $request->date;
            $Rendez_vous->Heure = $request->time;
            $Rendez_vous->id_Patient =$idP->id;
            $Rendez_vous->Remarques = $request->Remarques; // Ajoutez cette ligne pour inclure les remarques
            $Rendez_vous->save();

            return view('succès');

        } else {

            $Patient = new Patient;
            $Patient->Nom=$request->name;
            $Patient->Prénom=$request->prenom;
            $Patient->Age=$request->age;
            $Patient->E_mail=$request->email;
            $Patient->Numéro_de_téléphone=$request->phone;

            $Patient->save();

            $idP =patient::select('id')->where('E_mail', $request->email)->first();
            $Rendez_vous1 = new Rendez_vous;
            $Rendez_vous1->Date = $request->date;
            $Rendez_vous1->Heure = $request->time;
            $Rendez_vous1->id_Patient = $idP->id;


            $Rendez_vous1->save();

            return view('succès');
        }
    }





    public function AddRendez(Request $request)
    {

        $Rendez_vous = new  Rendez_vous;
        $Rendez_vous->Date=$request->date;
        $Rendez_vous->Heure=$request->heure;
        $Rendez_vous->Type_de_Rendez_vous=$request->type;
        $Rendez_vous->Statut=$request->statut;
        $Rendez_vous->Remarques=$request->remarques;
        $Rendez_vous->id_Patient=$request->id_Patient;


        $Rendez_vous->save();


    }





 // Méthode pour mettre à jour un rendez-vous
 public function updaterendez(Request $request, $id)
 {
     // Validez les données du formulaire, assurez-vous que les règles de validation sont appropriées.

     // Récupérez le rendez-vous à éditer en fonction de l'ID passé en paramètre
     $rendezVous = Rendez_vous::find($id);

     // Vérifiez si le rendez-vous existe
     if (!$rendezVous) {
         return redirect()->route('rendezvous.index')->with('error', 'Rendez-vous non trouvé.');
     }

     // Mettez à jour les propriétés du rendez-vous avec les données du formulaire
     $rendezVous->Date = $request->input('date');
     $rendezVous->Heure = $request->input('Heure');
     $rendezVous->Type_de_Rendez_vous = $request->input('Type_de_Rendez_vous');
     $rendezVous->Statut = $request->input('Statut');
     $rendezVous->Remarques = $request->input('Remarques');

     // Enregistrez les modifications
     $rendezVous->save();

     // Redirigez l'utilisateur vers la page des rendez-vous avec un message de succès
     return redirect()->route('rendezvous.index')->with('success', 'Rendez-vous mis à jour avec succès.');
 }
}


