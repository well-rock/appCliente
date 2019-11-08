@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <!-- <div class="card-header">Adicionar</div>  -->

                <ol class="breadcrumb card-header">
                    <li class="breadcrumb-item"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cliente.detalhe', $telefone->cliente->id) }}">Detalhe</a></li>
                    <li class="breadcrumb-item active">Editar</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><b>Cliente: </b>{{ $telefone->cliente->nome }}</p>

                    <form action="{{ route('telefone.atualizar', $telefone->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method", value="put">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Título do Telefone" value="{{ $telefone->titulo }}">
                        </div>
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Número do Telefone" value="{{ $telefone->telefone }}">
                        </div>
                        <button class="btn btn-outline-success">Atualizar</button>
                    </form>
                    

                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
