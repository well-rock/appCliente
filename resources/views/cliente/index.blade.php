@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- <div class="card-header">Lista de Clientes</div> -->
                <ol class="breadcrumb card-header">
                    <li class="breadcrumb-item active">Clientes</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        <a class="btn btn-outline-info" href="{{ route('cliente.adicionar') }}">Adicionar</a>
                    </p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)

                                <tr>
                                    <th scope="row">{{ $cliente->id_cliente }}</th>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->endereco}}</td>
                                    <td>
                                        <a class="btn btn-outline-secondary" href="#">Editar</a>
                                        <a class="btn btn-outline-danger" href="#">Deletar</a>
                                    </td>
                                </tr>

                            @endforeach
                            
                        </tbody>
                    </table>

                    <div class="row justify-content-center">
                        {!! $clientes->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
