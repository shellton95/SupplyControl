<?php

namespace App\Http\Controllers;
use App\Models\Veiculo as ModelsVeiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use models\veiculo;
use models\user;
class VeiculoControler extends Controller
{
    
    public function index()
    {
        $usuario = DB::table('users')->get();
        $veiculos = DB::table('users')->join('veiculos', 'veiculos.id_usuario', '=', 'users.id')->select('users.nome', 'veiculos.*')->get();
        return view('veiculo/carro', compact('veiculos', 'usuario'));
    }

    public function create()
    {
        $usuario = DB::table('users')->get();
        return view('veiculo/cadastro', compact('usuario'));
        //return json_encode($usuario);
    }


    public function store(Request $request) 
    {
        $veiculo = new ModelsVeiculo();
        $veiculo->id_usuario = $request->input('idusuario');
        $veiculo->placa = $request->input('placa');
        $veiculo->save();
        return redirect()->route('veiculo.store');

    }

    public function update(Request $request, $id)
    {
        $veiculo = ModelsVeiculo::find($id);
        $veiculo->id_usuario = $request->input('idusuario');
        $veiculo->placa = $request->input('placa');
        $veiculo->save();
        return redirect()->route('veiculo.store');
    }
   
    public function destroy($id)
    {
        $usuario = ModelsVeiculo::find($id);
        $usuario->delete();
        return redirect()->route('veiculo.store');
    }
}
