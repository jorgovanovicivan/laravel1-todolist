<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TodoLists;
class Tasks extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(TodoLists::class);
    }
    
}
