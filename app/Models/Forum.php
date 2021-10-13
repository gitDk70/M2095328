<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['title','body', 'owner','user_id', 'date_added']; 
}
