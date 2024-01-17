<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formCreate()
    {
        return view('admin.category.add-category', compact('categories'));
    }
}
