<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;
    protected $fillable = ['title','date_added','user_id', 'categorie_id']; 
    
    public function etudiantHasUser(){
        return $this->hasOne("App\Models\User", 'id', 'user_id');
      }
}
