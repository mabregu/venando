<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Agency;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Office;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agents');
    }

    public function agent_register()
    {
        return view('auth.agents_register');
    }

    public function welcome()
    {
        return view('agents.agents_welcome');
    }

    public function information()
    {
        return view('agents.agents_information');
    }

    public function dashboard()
    {
        return view('agents.agents_dashboard');
    }

    public function buyers_list()
    {
        return view('agents.agents_buyers_list');
    }

    public function favorite_list()
    {
        return view('agents.agents_favorite_list');
    }

    public function seller_list()
    {
        return view('agents.agents_seller_list');
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
    public function store(Request $request)
    {

        $agency = null;
        $success = true;
        //dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4',
            'phone' => 'required|string|min:4',
            'cvr' => 'required',
        ]);

        \DB::beginTransaction();
        try {
            $agency = Agency::create([
                'role_id' => Role::BASIS,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'cvr' => $request->cvr,
            ]);

            $agency->save();

            
            $seller = Seller::create([
                'office_id' => $agency->id,
                'full_name' => $request->seller_name_1,
                'email' => $request->email,
                'password' => Hash::make('velkommen123'),
            ]);
                
            $seller->save();
                
            // $office = Office::create([
            //     'agency_id' => $agency->id,
            //     'seller_id' => $agency->id,
            // ]);

            // $office->save();

        } catch (\Throwable $th) {
            DB::rollback();
            $success = $th->getMessage();
            return back()->with('message', ['danger', $success]);
        }

        
        \DB::commit();

        $data = array('status' => TRUE);
        return json_encode($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
