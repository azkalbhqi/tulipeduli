<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Import HasFactory trait
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Blog extends Model
{
    use HasFactory; // Add HasFactory trait to enable factory() method
    
    protected $fillable = ['judul', 'konten', 'slug'];
}

?>
