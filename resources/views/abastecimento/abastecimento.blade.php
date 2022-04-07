@extends('./template/menu')

@section('abastecimento') 
<div class="container mt-4">
    <div class="text-center">
        <h3>Lista de Abastecimentos</h3>
    </div>
    <div class="float-xl-end">
        <a href="/relatorio/cadastro" type="button" class="btn btn-success">Novo Abastecimento </a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Usuario</th>
            <th scope="col">Veiculo</th>
            <th scope="col">KM Atual</th>
            <th scope="col">Valor Litro</th>
            <th scope="col">Quantidade Litro</th>
            <th scope="col">Valor Total</th>
            <th scope="col"> Ações </th>
        </tr>
        </thead>
        <tbody>
@foreach ($abastecimento as $item)
        <tr> 
            <th scope="row"> {{ $item->id }} </th>
            <td> {{ $item->nome }} </td>
            <td> {{ $item->placa }} </td>
            <td> {{ $item->km_atual }} </td>
            <td> {{ $item->val_litro }} </td>
            <td> {{ $item->qtd_litro }} </td>
            <td> {{ $item->valor }} </td>
            <td>
                <a href="/relatorio/{{ $item->id }}" class="btn btn-outline-danger btn-sm">Excluir</a>
            </td>
        </tr>
@endforeach
       
        </tbody>
    </table>
@endsection