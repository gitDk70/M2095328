<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Etudiant;
use App\Models\Ville;
use App\Models\Forum;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('auth.registration');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //return $request;
       // User::create([
       //   'name'=> $request->name,
       //   'email'=> $request->email,
       //   'password' => Hash::make($request->password)
       // ]);

       $request->validate([
         'name' =>'required|max:50|min:2',
         'email' => 'required|email|unique:users',
         'password' => 'required|min:6'
       ]);


     
       $user = new User;
       $user->fill($request->all());
       $user->password = Hash::make($request->password);
       $user->save();
       $iduser = $user->id;
     
     

     return redirect('dashboard');

    }

    public function customLogin(Request $request){

          $request->validate([
            'email' => 'required|email',
            'password' => 'required'
          ]);

          $credentials = $request->only('email', 'password');
          if(Auth::attempt($credentials)){
           
            return redirect()->intended('dashboard');
          }

          return redirect('login')->withSuccess('Les informations de connexion ne sont pas valides!');

    }


    public function dashboard(){

      $name = null;
      if(Auth::check()){
        $name = Auth::user()->name;
        $user_id =  Auth::user()->id;
        $isAdmin = Auth::user()->is_admin;
      }
        $forums = Forum::all();
        $etudiants = Etudiant::all(); 
        $users = User::all(); 
        
        if($isAdmin)
        return view('admin.dashboard', ['name' => $name, 'etudiants' => $etudiants]);
        else
        return view('etudiant.dashboard', ['name' => $name, 'user_id' => $user_id, 'users' => $users, 'forums' => $forums]);
    }


    public function logout(){
      Session::flush();
      Auth::logout();

      return redirect('login');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
