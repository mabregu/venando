<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Homeseeker;
use Illuminate\Http\Request;
use App\Models\UsersWishlists;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Facade\FlareClient\Http\Response;

class HomeseekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.homeseekers_register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     
    public function store(Request $request)
    {
        //var_dump($request->all());
        $user = null;
        $success = true;

        $request->validate([
            'name'              => 'required',
            'surname'           => 'required',
            'password'          => 'required|confirmed',
            'email'             => 'required|email',
            'telephone'         => 'required|numeric',
            'conditions'        => 'required|accepted',
        ]);

        //dd($request);
        \DB::beginTransaction();
        try {
            $user = User::create([
                'role_id'           => Role::HOMESEEKER,
                'name'              => $request->name,
                'surname'           => $request->surname,
                'password'          => Hash::make($request->password),
                'email'             => $request->email,
                'phone'             => $request->telephone,
            ]);
            
            $user->save();

            $userWish = UsersWishlists::create([
                'user_id'              => $user->id,
                'postal_codes'         => $request->postal_codes,
                'price'               => $request->price,
                'kvm'                 => $request->kvm,
                'building_age'        => $request->building_age,
                'garden'              => $request->garden,
                'plan'                => $request->plan,
                'rooms'               => $request->rooms,
                'toilets'             => $request->toilets,
                'balcony'             => $request->balcony,
                'garage'              => $request->garage,
                'cellar'              => $request->cellar,
                'architect'           => $request->architect,
                'hobby_room'          => $request->hobby_room,
                'terrace'             => $request->terrace,
                'wood_stove'          => $request->wood_stove,
                'ready_to_move'       => $request->ready_to_move,
                'other'               => $request->other,
                'green_area'          => $request->green_area,
                'institutions'        => $request->institutions,
                'sports_facilities'   => $request->sports_facilities,
                'shopping'            => $request->shopping,
                'transport'           => $request->transport,
                'beach'               => $request->beach,
                'priority_1'          => $request->priority_1,
                'priority_2'          => $request->priority_2,
                'priority_3'          => $request->priority_3,
            ]);
            
            //dd($userWish);

            $userWish->save();

        } catch (\Throwable $th) {
            DB::rollback();
            $success = $th->getMessage();
            return back()->with('message', ['danger', $success]);
        }

        
        \DB::commit();

        $data = array('status' => TRUE);
        return json_encode($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homeseeker  $homeseeker
     * @return \Illuminate\Http\Response
     */
    public function show(Homeseeker $homeseeker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homeseeker  $homeseeker
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeseeker $homeseeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homeseeker  $homeseeker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeseeker $homeseeker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homeseeker  $homeseeker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homeseeker $homeseeker)
    {
        //
    }
}
