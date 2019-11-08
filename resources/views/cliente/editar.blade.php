@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <!-- <div class="card-header">Adicionar</div>  -->

                <ol class="breadcrumb card-header">
                    <li class="breadcrumb-item"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="breadcrumb-item active">Editar</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('cliente.atualizar', $cliente->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method", value="put">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do Cliente" value="{{ $cliente->nome }}">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="E-mail do Cliente" value="{{ $cliente->email }}">
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço do Cliente" value="{{ $cliente->endereco }}">
                        </div>
                        <button class="btn btn-outline-success">Atualizar</button>
                    </form>
                    

                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
