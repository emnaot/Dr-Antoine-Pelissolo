<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model

{
    protected $table="patients";
    protected $primaryKey="id";
    protected $fillable=['Nom','Prénom','Age','Sexe','Date_de_naissance','Adresse','Numéro_de_téléphone','E-mail','Statut','Remarques'];
    use HasFactory;
}
