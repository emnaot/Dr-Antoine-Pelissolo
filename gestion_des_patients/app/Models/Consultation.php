<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $table="consultations";
    protected $primaryKey="id";
    protected $fillable=['id_Patient','Date_et_Heure','Raison','Diagnostic','Prochain_Rendez_vous','Statut','Remarques'];
    use HasFactory;
}

