<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    protected $table="ordonnances";
    protected $primaryKey="id";
    protected $fillable=['id_Consultation','Description'];
    use HasFactory;
}
