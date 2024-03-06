<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class CategoryController extends Controller
{
    public function categoryCreate()
    {
        $categories = Category::all();
        return view('admin.category.add-category', compact('categories'));
    }

    public function categoryStore(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'period' => $request->period,
            'location' => $request->location,
            'nature_of_contract' => $request->nature_of_contract,
            'type_of_project' => $request->type_of_project,
            'no_of_workers' => $request->no_of_workers,
        ]);
        return redirect()->back();
    }

    public function categoryDelete($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->back();
    }

    public function galleryCreate()
    {
        $galleries = Setting::where('type', 'gallery')->get();
        return view('admin.gallery', compact('galleries'));
    }

    public function galleryStore(Request $request)
    {
        if ($request->image) {
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->image);
            $fileNameWithoutExtension = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $image_url = $fileNameWithoutExtension . '-' . date('YmdHis') . '.' . $request->image->getClientOriginalExtension();

            $image->resize(570, 290);
            $image->toJpeg(80);

            // Specify the full path where you want to store the image
            $imagePath = public_path('images/' . $image_url);
            $image->save($imagePath);

            Setting::create([
                'type' => 'gallery',
                'value' => $image_url,
            ]);

            return redirect()->back();
        }
    }
}
