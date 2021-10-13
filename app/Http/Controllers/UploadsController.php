<?php

namespace App\Http\Controllers;
use App\Models\Doc;
use Auth;
use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\User;

class UploadsController extends Controller
{
    public function index(Request $request) {
        return view('uploads.upload'); //formulaire d'upload
         
 
     }
    
     public function edit(Doc $doc)
    {
        
        return view('uploads.edit', ['doc'=> $doc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doc $doc)
    {
        $doc->update([
            'name' => $request->name,
            'title' => $request->title
          ]);
  
          return redirect('document');
    }
    
    public function uploadFile(Request $req) {
    //    $request->file('file')->store('docs');

       $fileModel = new Doc;
       $docs = Doc::all();


        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('docs', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->title = $req->title;
            $fileModel->user_id = Auth::user()->id;
            $fileModel->save();

            $locale = session()->get('locale');   
            if($locale == 'fr') {
                return back()
            ->with('success','Fichier téleversé')
            ->with('file', $fileName);
            }else {
                return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
            }
            
        }
   
     }

     public function show() {
         $docs = Doc::all();
         $user_id = Auth::user()->id;
         $users = User::all();
         return view('forum.docs', ['docs'=>$docs, 'users'=>$users, 'user_id' =>$user_id ]);
     }

     public function destroy(Doc $doc)
    {
        $id = $doc::find($doc->id);
        $doc->delete($id);
        return redirect('/document');
    }
}
