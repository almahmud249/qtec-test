<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'period',
        'location',
        'nature_of_contract',
        'type_of_project',
        'no_of_workers'
    ];

    public function template()
    {
        return $this->hasOne(FormField::class,'category_id','id');
    }
}
