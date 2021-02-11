<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function store(Property $property)
    {
        $this->validate(request(), [
            'photo' => 'required|image|max:3000'
        ]);

        $photo = request()->file('photo')->store('public');

        Image::create([
            'url' => Storage::url($photo),
            'post_id' => $property->id
        ]);
    }

    public function destroy(Image $photo)
    {
        $photo->delete();

        $photoPath = str_replace('storage', 'public', $photo->url);

        Storage::delete($photoPath);

        return back()->with('flash', __('Deleted photo'));
    }
}
