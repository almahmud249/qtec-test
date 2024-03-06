<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\FormField;
use App\Models\FormTemplate;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserFormData;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userDashboard()
    {
        $categories = Category::all();
        $templates = [];
        return view('user.dashboard', compact('categories', 'templates'));
    }

    public function formTemplate(Request $request, $id)
    {
        $templates = FormField::where('category_id', $id)->first();
        if ($templates) {
            return response()->json([
                'result' => $templates->form_data,
            ]);
        } else {
            return response()->json([
                'result' => [],
            ]);
        }
    }

    public function submitForm(Request $request)
    {
        $modifiedFields = [];

        foreach ($request->fields as $key => $field) {
            if (isset($field['image'])) {
                $imagePath = $field['image']->store('images', 'public');
                $imageName = $field['image']->getClientOriginalName();

                // Add image name to the specific field in the modified array
                $field['image'] = $imageName;
            }

            // Add the modified field to the new array
            $modifiedFields[$key] = $field;
        }
        // Continue with the rest of your logic
        UserFormData::create([
            'user_id' => \auth()->user()->id,
            'category_id' => $request->category_id,
            'value' => $modifiedFields,
        ]);

        return redirect()->back();
    }

    public function list()
    {
        $all_data = User::with('userFormData','userFormData.category')->where('id', \auth()->user()->id)->first();
        return view('user.index', compact('all_data'));
    }

    public function clients()
    {
        $clients = Category::all();
        return view('layouts.user.clients', compact('clients'));
    }

    public function license()
    {
        return view('layouts.user.license');
    }

    public function gallery()
    {
        $galleries = Setting::where('type', 'gallery')->get();
        return view('layouts.user.gallery', compact('galleries'));
    }
    public function contact()
    {
        return view('layouts.user.contact');
    }

    public function contactStore(Request $request)
    {
        Contact::create($request->all());
        return redirect()->back();
    }
}
