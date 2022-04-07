@extends('./template/menu')

@section('user')
    
    <div class="container mt-4">
        <div class="text-center">
            <h3>Lista de usuarios</h3>
        </div>
        <div class="float-xl-end">
            <a href="/usuarios/cadastro" type="button" class="btn btn-success" >Novo Usuario</a>
        </div>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">sobrenome</th>
                <th scope="col">idade</th>
            </tr>
            </thead>

            <tbody>
@foreach ($users as $item) 
                <tr>
                    <th scope="row"> {{ $item->id }} </th>
                    <td> {{ $item->nome }} </td>
                    <td> {{ $item->email }} </td>
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id }}">Editar</button>
                        <a href="/usuarios/{{ $item->id }}" class="btn btn-outline-danger btn-sm">Excluir</a>
                    </td>

        

                    <!-- Modal -->
                    <form action="usuarios/edit/{{ $item->id }}" method="Post" enctype="multipart/form-data">
                        <div class="modal fade" id="staticBackdrop{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Cadastro do Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                    @csrf
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label" >Nome</label>
                                        <input type="text" value="{{ $item->nome }}" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Nome">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">E-mail</label>
                                        <input type="text" value="{{ $item->email }}" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button class="btn btn-primary">Atualizar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </tr>
@endforeach
            </tbody>
        </table>
    </div>

@endsection

    
