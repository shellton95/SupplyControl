@extends('./template/menu')

@section('cars')
    <div class="container mt-4">
        <div class="text-center">
            <h3>Lista de Veiculos</h3>
        </div>
        <div class="float-xl-end">
            <a href="/carros/cadastro" type="button" class="btn btn-success" >Novo Usuario</a>
        </div>
    
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Placa</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
@foreach ($veiculos as $item) 
            <tr>
                <th scope="row"> {{ $item->id }} </th>
                <td> {{ $item->nome }} </td>
                <td> {{ $item->placa }}  </td>
                <td>
                    <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id }}">Editar</button>
                    <a href="/carros/{{ $item->id }}" class="btn btn-outline-danger btn-sm">Excluir</a>
                </td>

                    <!-- Modal -->
                <form action="carros/edit/{{ $item->id }}" method="Post" enctype="multipart/form-data">
                    <div class="modal fade" id="staticBackdrop{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Cadastro de Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                
                                    @csrf
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Identificação do Usuario</label>
                                        <select name="idusuario" class="form-select" aria-label="Default select example">
@foreach ($usuario as $user)
                                            <option  value="{{ $user->id }}">{{ $user->nome }}</option>
@endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Placa</label>
                                        <input type="text" value="{{ $item->placa }}" name="placa" class="form-control" id="formGroupExampleInput2" placeholder="Sobre Nome">
                                    </div>
                                
                            
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-primary">Atualizar</button>
                            
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