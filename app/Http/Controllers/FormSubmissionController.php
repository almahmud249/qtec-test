<?php

namespace App\Http\Controllers;

use App\Models\FormTemplate;
use Illuminate\Http\Request;

class FormSubmissionController extends Controller
{
    public function formFieldCreate(Request $request)
    {
        $forms = FormTemplate::all();

        return view('admin.form.add-form-field', compact('forms'));
    }

    public function formFieldStore(Request $request)
    {
        dd($request->all());
    }
}
