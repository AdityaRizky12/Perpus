<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

 

    protected $fillable = ['name', 'title', 'language']; // Tambahkan 'language'
    protected $attributes = [
        'title' => 'Untitled',
        'language' => 'English', // Beri nilai default
    ];
    
    public function books() 
    {
        return $this->hasMany('App\Models\Book', 'catalog_id');
    }
}

