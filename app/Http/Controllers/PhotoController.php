<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function store(Property $property)
    {
        $this->validate(request(), [
            'photo' => 'required|image|max:3000'
        ]);

        $photo = request()->file('photo')->store('public');

        Photo::create([
            'url' => Storage::url($photo),
            'property_id' => $property->id
        ]);
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();

        $photoPath = str_replace('storage', 'public', $photo->url);

        Storage::delete($photoPath);

        return back()->with('flash', __('Deleted photo'));
    }
}
