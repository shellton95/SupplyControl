@extends('./template/menu')

@section('cadastroUsuario')

<div class="container">
    <div class="text-center mt-4">
        <h3>Cadastro de Usuario</h3>
    </div>
    <form action="{{ route('users.store') }}" method="Post" enctype="multipart/form-data">       
            @csrf
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label" >Nome</label>
            <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Nome">
        </div>
        <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">E-mail</label>
            <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Email">
        </div>        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary">cadastrar</button>
    </form>
</div>
   
@endsection

