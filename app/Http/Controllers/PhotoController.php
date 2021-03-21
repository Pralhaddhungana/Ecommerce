<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'photo_id' => 'required|string',
            'photo' => 'required|file'
        ]);
        $photo = new \App\Models\Photo();
        $photo->idx = $request->photo_id;

        $path = $request->file('photo')->store('photos');

        $photo->file_path = $path;
        $photo->save();

        return back()->with(['successMessage' => "Photo added succesfully"]);
    }

    public function create()
    {
        return view('admin.create-photo');
    }

    public function show(Request $request)
    {
        $photo = \App\Models\Photo::where('idx', $request->id)->first();

        if ($photo == null) {
            return abort(404);
        }

        return view('site.pages.show-photo')->with(['photo'=> $photo]);
    }
}
