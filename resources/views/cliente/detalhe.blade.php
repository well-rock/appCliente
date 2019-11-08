@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- <div class="card-header">Lista de Clientes</div> -->
                <ol class="breadcrumb card-header">
                    <li class="breadcrumb-item"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="breadcrumb-item active">Detalhe</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><b>Cliente: </b>{{ $cliente->nome }}</p>
                    <p><b>Email: </b>{{ $cliente->email }}</p>
                    <p><b>Endereço: </b>{{ $cliente->endereco }}</p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Número</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cliente->telefones as $telefone)
                                <tr>
                                    <th scope="row">{{ $telefone->id }}</th>
                                    <td>{{ $telefone->titulo }}</td>
                                    <td>{{ $telefone->telefone }}</td>
                                    <td>
                                        <a class="btn btn-outline-secondary" href="#">Editar</a>
                                        <a class="btn btn-outline-danger" href="javascript:(confirm('Deletar esse registro?') ? window.location.href='#' : false)">Deletar</a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>

                     <p>
                        <a class="btn btn-outline-primary" href="{{ route('telefone.adicionar', $cliente->id) }}">Adicionar Telefone</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
