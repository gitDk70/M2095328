<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Categorie extends Model
{
    protected $table = 'Categorie';
    protected $fillable = ['categorie'];

    public $timestamp = false;


    static public function selectCategorie(){
      $lg=null;
      if(session()->has('locale') && session()->get('locale') == 'fr'){
        $lg = "_fr";
      }

      $query = Categorie::Select('id',
        DB::raw('(case when categorie'.$lg.' is null then categorie else categorie'.$lg.' end) as categorie')
      )
      ->OrderBy('categorie')
      ->get();
      return $query;
    }
}
