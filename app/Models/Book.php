<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    
    public function publisher() 
    {
        return $this->belongsTo('App\Models\Publisher', 'publisher_id');
    }
    public function catalog()
{
    return $this->belongsTo(Catalog::class, 'catalog_id'); 
}

}

