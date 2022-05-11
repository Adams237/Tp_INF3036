<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class Test extends Component
{
    use WithFileUploads;
    // public function search(Request $request){
    //     if($request->ajax()){
    //        $nom =  User::where('name','LIKE', '%' . $request->search . '%')->get();
    //         $htmldata = view('livewire.test')->with(['name'=> $nom])->render();
    //         return Response($htmldata);
    //     }
    // }
    public $name;
    public $content;
    public $avatar;



    public function send(){
        $this->validate([
            'name' => 'nullable',
            'avatar' => 'required|image|max:4096'
        ]);
        $fileName = time(). '.' . $this->avatar->extension();
        // $file= $this->avatar->store('uploads');
        $file = $this->avatar->storeAs('uploads', $fileName, 'public');
        // Storage::put('avatarstes', $this->avatar); 
        // Storage::url($file) recupère l'url du fichier
        // return Storage::download($file); télécharcher un document
        //$file =  Storage::disk('local')->put('avatars', $this->avatar, '');
        dd($file);
        // dd(Storage::get($file));
        // dd(Storage::disk('local')->exists($file));
    }
    public function render()
    {
        if(!Gate::allows('access')){
            abort('403');
        }
        return view('livewire.test')->layout('layouts.app2');
    }
}
