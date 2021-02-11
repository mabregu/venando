<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Property;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $address = $request->get('address');
        $category = $request->get('category');
        $environment_min = $request->get('environment_min');
        $environment_max = $request->get('environment_max');
        $rooms_min = $request->get('rooms_min');
        $rooms_max = $request->get('rooms_max');
        $minimum_price = $request->get('minimum_price');
        $maximum_price = $request->get('maximum_price');
        $categories = Category::all();
        // {{ dd($request->get('environment_min') . $request->get('environment_max')); }}

        return view('properties.index', compact('categories'), [
            'newProperty' => new Property,
            'properties' => Property::with('category')
                ->address($address)
                ->environment($environment_min, $environment_max)
                ->price($minimum_price, $maximum_price)
                ->room($rooms_min, $rooms_max)
                ->category($category)
                ->latest()
                ->paginate(),
            'deletedProperties' => Property::onlyTrashed()->get()
        ]);
    }

    /**
     * Display a listing of the resource on map.
     *
     * @return \Illuminate\Http\Response
     */
    public function showMap(Request $request)
    {
        $address = $request->get('address');
        $category = $request->get('category');
        $environment_min = $request->get('environment_min');
        $environment_max = $request->get('environment_max');
        $rooms_min = $request->get('rooms_min');
        $rooms_max = $request->get('rooms_max');
        $minimum_price = $request->get('minimum_price');
        $maximum_price = $request->get('maximum_price');
        $categories = Category::all();
        // {{ dd($request->get('environment_min') . $request->get('environment_max')); }}

        return view('properties.index-map', compact('categories'), [
            'newProperty' => new Property,
            'properties' => Property::with('category')
                ->address($address)
                ->environment($environment_min, $environment_max)
                ->price($minimum_price, $maximum_price)
                ->room($rooms_min, $rooms_max)
                ->category($category)
                ->latest()
                ->paginate(),
            'deletedProperties' => Property::onlyTrashed()->get()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('properties.create');

        return view('properties.create', [
            'newProperty' => new Property,
            'properties' => Property::with('category')->latest()->paginate(),
            'deletedProperties' => Property::onlyTrashed()->get()
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        $rooms = DB::table('property_room')
                    ->select(DB::raw('count(*) as total, rooms.name'))
                    ->leftJoin('rooms', 'rooms.id', '=', 'property_room.room_id')
                    ->where('property_id', $property->id)
                    ->groupBy('rooms.id')
                    ->get();

        //dd($rooms);
        return view('properties.show', compact('rooms'), [
            'property' => $property
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addFavourite(Request $request)
    {
        try {
            if( !isset($request->user()->id) )
                return response('Not logged', 401);

            DB::table('property_user')->insert([
                'property_id' => $request->id,
                'user_id' => $request->user()->id
            ]);

            return response('Added', 200);

        } catch (\Throwable $th) {
            return response($th, 500);
        }
    }

    public function deleteFavourite(Request $request)
    {
        try {
            if( !isset($request->user()->id) )
                return response('Not logged', 401);

            DB::table('property_user')->where([
                'property_id' => $request->id,
                'user_id' => $request->user()->id
            ])->delete();

            return response('Deleted', 200);

        } catch (\Throwable $th) {
            return response($th, 500);
        }
    }

    public function newProperty()
    {
    }



}
