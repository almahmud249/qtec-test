<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FormTemplate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userDashboard()
    {
        $categories = Category::all();
        $templates = [];
        return view('user.dashboard', compact('categories','templates'));
    }

    public function formTemplate(Request $request, $id)
    {
        $categories = Category::all();
        $templates = FormTemplate::where('category_id', $id)->get();
        return view('user.dashboard', compact('categories','templates'));
    }
}
