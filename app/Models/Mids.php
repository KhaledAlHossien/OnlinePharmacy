<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mids extends Model
{
    use HasFactory;
    protected $table = 'midicine';
    protected $fillable = ['name', 'type', 'price', 'description', 'photo'];

    public function company()
    {
        return $this->belongsTo(company::class);
    }
}
