@extends('./template/menu')

@section('cadveiculo')

<div class="container">
    <div class="text-center mt-4">
        <h3>Cadastro de Veiculo</h3>
    </div>
    <form action="/carros" method="Post" enctype="multipart/form-data">
                    
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
            <label for="formGroupExampleInput2" class="form-label">Placa</label>
            <input type="text" name="placa" class="form-control" id="formGroupExampleInput2" >
        </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary">Cadastrar</button>
    </form>
</div>
    
@endsection