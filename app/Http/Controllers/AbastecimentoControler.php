<?php

namespace App\Http\Controllers;
use App\Models\Abastecimento as ModelsAbastecimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use models\abastecimento;
class AbastecimentoControler extends Controller
{
   
    public function index()
    {
        //$abastecimento = ModelsAbastecimento::all();
        $abastecimento = DB::table('abastecimentos')->join('veiculos', 'veiculos.id', '=', 'abastecimentos.id_veiculo')
            ->join('users', 'users.id', '=', 'abastecimentos.id_usuario')
            ->select('users.nome', 'veiculos.placa', 'abastecimentos.*')->get();
        return view('abastecimento/abastecimento', compact('abastecimento'));
    }
   
    public function store(Request $request)
    {
        $abastecimento = new ModelsAbastecimento();
        $abastecimento->id_veiculo = $request->input('idveiculo');
        $abastecimento->id_usuario = $request->input('idusuario');
        $abastecimento->km_atual = $request->input('kmveiculo');
        $abastecimento->valor = $request->input('valtotal');
        $abastecimento->qtd_litro = $request->input('qtdabastecido');
        $abastecimento->val_litro = $request->input('vallitro');
        $abastecimento->save();
        return redirect()->route('abast.store');
    }

    public function create(){
        $usuario = DB::table('users')->get();
        $veiculo = DB::table('veiculos')->get();
        return view('abastecimento/cadastro', compact('usuario', 'veiculo'));
    }
   
  
    public function destroy($id)
    {
        $abastecimento = ModelsAbastecimento::find($id);
        $abastecimento->delete();
        return redirect()->route('abast.store');
    }
}
