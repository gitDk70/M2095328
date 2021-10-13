<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Auth;
use PDF;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            // $forums = Forum::all();
            $forums = Forum::latest()->get();
            $users = User::all();
            $isAdmin = Auth::user()->is_admin;
            $name = Auth::user()->name;
            $user_id = Auth::user()->id;
            return view('etudiant.dashboard', ['name'=>$name, 'forums' => $forums, 'users'=>$users, 'user_id' =>$user_id ]);
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
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = Forum::create([
            'title' => $request->title,
            'body' => $request->body,
            // 'categorie_id' => $request->categorie_id,
            'user_id' => Auth::user()->id
          ]);
  
          return redirect('forum/'.$newPost->id);
       
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show(Forum $forum)
    {
        return  view('forum.show', ['forum' => $forum]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        return view('forum.edit', ['forum'=> $forum]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        $forum->update([
            'title' => $request->title,
            'body' => $request->body,
          ]);
  
          return redirect('forum/' . $forum->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        $id = $forum::find($forum->id);
        $forum->delete($id);
        return redirect('forum/');
    }
    public function showPdf(Forum $forum)
    {
      $pdf = PDF::loadView('pdf.show', ['forum' => $forum]);
      return $pdf->download('forum.pdf');
      //return $pdf->stream('blog-post.pdf');
    }
    
}
