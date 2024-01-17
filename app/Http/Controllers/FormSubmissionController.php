<?php

namespace App\Http\Controllers;

use App\Models\FormField;
use App\Models\FormTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormSubmissionController extends Controller
{
    public function formFieldCreate(Request $request)
    {
        $forms = FormTemplate::all();
        $form_fields = FormField::with('template', 'template.category')->get();
        return view('admin.form.add-form-field', compact('forms', 'form_fields'));
    }

    public function formFieldStore(Request $request)
    {
        $this->validateForm($request->fields);
        FormField::create([
            'form_data' => $request->fields,
            'form_template_id' => json_decode($request->form_template)->id
        ]);

        return redirect()->back();
    }

    private function validateForm($fields)
    {
        try {
            $containsNull = collect($fields)->flatten()->contains(null);

            if ($containsNull) {
                $validator = Validator::make([], []);
                $validator->errors()->add('null_values', 'At least one value is null');

                return redirect()->back()->withErrors($validator)->withInput();
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function viewForm($id)
    {
        $fields = FormField::find($id);
        return view('admin.form.view-form', compact('fields'));
    }
}
