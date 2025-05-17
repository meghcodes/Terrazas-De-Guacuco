<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedRegisteredUser = $request->validate([
            'name'=>'required',
            'role'=>'required',
            'emailId'=>'required|email|unique:registers',
            'password'=>'required|min:5'

        ]);

        $userRegistered = new Register();
        $userRegistered->name=$validatedRegisteredUser['name'];
        $userRegistered->role=$validatedRegisteredUser['role'];
        $userRegistered->emailId=$validatedRegisteredUser['emailId'];
        $userRegistered->password=$validatedRegisteredUser['password'];
        $userRegistered->save();

        //sene mail
        Mail::to(session('user_email') -> send(new demomail));

        return view('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $emailId =  $request->emailId;
        $password = $request->password;
        
        $RegisteredUser = DB::select('select * from registers where emailId = ? AND password = ?',[$emailId,$password]);

        if($RegisteredUser && $RegisteredUser[0]->role === "PoolManager"){
            Session::put('user_role', $RegisteredUser[0]->role);
            Session::put('user_email', $RegisteredUser[0]->emailId);
            Session::put('user_name', $RegisteredUser[0]->name);
            return view('PoolManagerServices.poolManagerServices');
        } else if($RegisteredUser && $RegisteredUser[0]->role === "Visitor"){
            Session::put('user_role', $RegisteredUser[0]->role);
            Session::put('user_email', $RegisteredUser[0]->emailId);
            Session::put('user_name', $RegisteredUser[0]->name);
            return view('VisitorServices.visitorServices');
        } else if($RegisteredUser && $RegisteredUser[0]->role === "Resident"){
            Session::put('user_role', $RegisteredUser[0]->role);
            Session::put('user_email', $RegisteredUser[0]->emailId);
            Session::put('user_name', $RegisteredUser[0]->name);
            return view('ResidentServices.residentServices');
        } else if($RegisteredUser && $RegisteredUser[0]->role === "ApartmentManager"){
            Session::put('user_role', $RegisteredUser[0]->role);
            Session::put('user_email', $RegisteredUser[0]->emailId);
            Session::put('user_name', $RegisteredUser[0]->name);
            return view('ApartmentManagerServices.apartmentManagerServices');
        } else if($RegisteredUser && $RegisteredUser[0]->role === "BuildingManager"){
            Session::put('user_role', $RegisteredUser[0]->role);
            Session::put('user_email', $RegisteredUser[0]->emailId);
            Session::put('user_name', $RegisteredUser[0]->name);
            return view('BuildingManagerServices.buildingManagerServices');
        } else if($RegisteredUser && $RegisteredUser[0]->role === "GardenManager"){
            Session::put('user_role', $RegisteredUser[0]->role);
            Session::put('user_email', $RegisteredUser[0]->emailId);
            Session::put('user_name', $RegisteredUser[0]->name);
            return view('GardenManagerServices.gardenManagerServices');
        } else if($RegisteredUser && $RegisteredUser[0]->role === "VisitorManager"){
            Session::put('user_role', $RegisteredUser[0]->role);
            Session::put('user_email', $RegisteredUser[0]->emailId);
            Session::put('user_name', $RegisteredUser[0]->name);
            return view('VisitorManagerServices.visitorManagerServices');
        } else if($RegisteredUser && $RegisteredUser[0]->role === "superAdmin"){
            Session::put('user_role', $RegisteredUser[0]->role);
            Session::put('user_email', $RegisteredUser[0]->emailId);
            Session::put('user_name', $RegisteredUser[0]->name);
            return view('SuperAdminServices.SuperAdminServices');
        } else if($RegisteredUser && $RegisteredUser[0]->role === "SecurityManager"){
            Session::put('user_role', $RegisteredUser[0]->role);
            Session::put('user_email', $RegisteredUser[0]->emailId);
            Session::put('user_name', $RegisteredUser[0]->name);
            return view('SecurityManagerServices.securityManagerServices');
        }else if($RegisteredUser && $RegisteredUser[0]->role === "TennisManager"){
            Session::put('user_role', $RegisteredUser[0]->role);
            Session::put('user_email', $RegisteredUser[0]->emailId);
            Session::put('user_name', $RegisteredUser[0]->name);
            return view('TennisManagerServices.tennisManagerServices');
        }else{
            Session::put('user_role', '');
            return view('services');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(register $register)
    {
        //
    }
}
