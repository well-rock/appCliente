@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <!-- <div class="card-header">Adicionar</div>  -->

                <ol class="breadcrumb card-header">
                    <li class="breadcrumb-item"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="breadcrumb-item active">Adicionar</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('cliente.salvar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nome">Nome</label>
                             <input type="text" name="nome" class="form-control @if($errors->first('nome')) is-invalid @else is-valid @endif" value="{{ old('nome') }}" placeholder="Nome do Cliente" autocomplete="nome" autofocus>
                            @if($errors->has('nome'))
                                <span class="help-block" style="color: Red;">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control @if($errors->first('email')) is-invalid @else is-valid @endif" value="{{ old('email') }}" placeholder="E-mail do Cliente">                                 
                            @if($errors->has('email'))
                                <span class="help-block" style="color: Red;">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>                    
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('endereco') ? 'has-error' : '' }}">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control @if($errors->first('endereco')) is-invalid @else is-valid @endif" value="{{ old('endereco') }}" placeholder="Endereço do Cliente">
                            @if($errors->has('endereco'))
                                <span class="help-block" style="color: Red;">
                                    <strong>{{ $errors->first('endereco') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button class="btn btn-outline-success">Adicionar</button>
                    </form>
                    

                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
