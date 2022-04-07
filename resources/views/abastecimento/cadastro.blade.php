@extends('./template/menu')
@section('cadAbastecimento')

<div class="container mt-4">
    <div class="text-center">
        <h3>Cadastro de Abastecimento</h3>
    </div>
    <form action="{{ route('abast.store') }}" method="POST" enctype="multipart/form-data">
          
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Identificação do usuario</label>
            <select name="idusuario" class="form-select" aria-label="Default select example">
@foreach ($usuario as $item)
                    <option value="{{ $item->id }}">{{ $item->nome }}</option>
@endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Identificação do veiculo</label>
            <select name="idveiculo" class="form-select" aria-label="Default select example">
@foreach ($veiculo as $item)
                <option value="{{ $item->id }}">{{ $item->placa }}</option>
@endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Quilometragem</label>
            <input type="number" name="kmveiculo" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Valor Litro</label>
            <input type="number" name="vallitro" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Quantidade Abastecido</label>
            <input type="number" name="qtdabastecido" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Valor Total</label>
            <input type="number" name="valtotal" class="form-control" id="formGroupExampleInput2">
        </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary">Cadastrar</button>
    </form>
</div>
    
@endsection