<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use App\Models\User;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Auth;
use Hash;

class EtudiantController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Tous les etudiants

        if(Auth::check()){
            $etudiants = Etudiant::all(); 
            $isAdmin = Auth::user()->is_admin;
            
            if($isAdmin)
            return view('admin.dashboard', ['etudiants' => $etudiants]);
            else
            return view('etudiant.dashboard', ['etudiants' => $etudiants]);
        }    
        return redirect('login')->withSuccess('Vous n\'êtes pas autorisé à accéder ');
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all();
        return view('admin.create',['villes' => $villes]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $auth = new AuthController();
        //   $id_user = $auth->store($request);

        // $user = User::create([
        //     'name' =>$request->nom,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);
        $iduser = User::insertGetId(
            ['name' =>$request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password)]
        );
        

        $newEtudiant = Etudiant::create([
            'nom' => $request->nom,
            'phone' => $request->phone,
            'email' =>$request->email, 
            'datenaiss' =>$request->datenaiss, 
            'password' =>$request->password,
            'user_id' =>$iduser,
            'ville_id' =>$request->ville_id 
          ]);
       
       
        //   $newUser = new \Illuminate\Http\Request();
        //   $newUser->setMethod('POST');
        //   $newUser->request->add([
        //       'name' =>$request->nom,
        //       'email' => $request->email,
        //       'password' => $request->password
        //     ]);
          
          
       
        
        return redirect('etudiant/'.$newEtudiant->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return  view('admin.show', ['etudiant' => $etudiant]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        // $et = Etudiant::find($etudiant);
        // return view('edit', ['etudiant' => $et]);
        $villes = Ville::all();
        $ville_et = Ville::find($etudiant->ville_id);
        return view('admin.edit', ['etudiant'=> $etudiant, 'villes' => $villes, 'ville_et'=> $ville_et]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            'nom' => $request->nom,
            'phone' => $request->phone,
            'email' => $request->email,
            'datenaiss' => $request->datenaiss,
            'ville_id' => $request->ville_id
          ]);
  
          return redirect('etudiant/' . $etudiant->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $id = $etudiant::find($etudiant->id);
        $etudiant->delete($id);
        return redirect('/home');
    }
}
