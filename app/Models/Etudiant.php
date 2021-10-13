<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['nom','phone', 'email', 'datenaiss','password','user_id', 'ville_id']; 
    
    public function etudiantHasUser(){
        return $this->hasOne("App\Models\User", 'id', 'user_id');
      }

}
