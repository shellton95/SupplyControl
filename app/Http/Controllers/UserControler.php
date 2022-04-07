<?php

namespace App\Http\Controllers;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use models\user;

class UserControler extends Controller
{
   
    public function index()
    {
        $users = ModelsUser::all();
        return view('usuario/index', compact('users'));
    }

    public function create(){
        return view('usuario/cadastro');
    }

   
    public function store(Request $request)
    {
        $usuario = new ModelsUser();
        $usuario->nome = $request->input('nome');
        $usuario->email = $request->input('email');
        $usuario->save();
        return redirect()->route('users.index');
    }

  
    public function update(Request $request, $id)
    {
        $usuario = ModelsUser::find($id);
        $usuario->nome = $request->input('nome'); 
        $usuario->email = $request->input('email');
        $usuario->save();
        return redirect()->route('users.index');
    }

    
    
    public function destroy($id)
    {
        $usuario = ModelsUser::find($id);
        $usuario->delete();
        return redirect()->route('users.index');
        
    }
    
}
