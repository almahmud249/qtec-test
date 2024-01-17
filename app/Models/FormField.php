<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    use HasFactory;

    protected $fillable=['form_template_id','form_data'];

    protected $casts=[
        'form_data' => 'array'
    ];

    public function template()
    {
       return $this->hasOne(FormTemplate::class,'id','form_template_id');
    }
}
