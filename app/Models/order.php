<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = ['name', 'type', 'price', 'description', 'name_clint', 'phon'];

    // public function company()
    // {
    //     return $this->belongsTo(company::class);
    // }
}
