@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <!-- <div class="card-header">Adicionar</div>  -->

                <ol class="breadcrumb card-header">
                    <li class="breadcrumb-item"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cliente.detalhe', $cliente->id) }}">Detalhe</a></li>
                    <li class="breadcrumb-item active">Adicionar</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><b>Cliente: </b>{{ $cliente->nome }}</p>

                    <form action="{{ route('telefone.salvar', $cliente->id) }}" method="post">
                        {{ csrf_field() }}
                        <!--<div class="form-group {{ $errors->has('titulo') ? 'has-error' : '' }}">
                            <label for="titulo">Título</label>
                            @if(!$errors->has('titulo'))
                                <input type="text" name="titulo" class="form-control is-valid" placeholder="Título do Telefone">
                            @else
                                <input type="text" name="titulo" class="form-control is-invalid" placeholder="Título do Telefone">
                                <span class="help-block" style="color: Red;">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </span>
                            @endif
                        </div>-->
                        <div class="form-group {{ $errors->has('titulo') ? 'has-error' : '' }}">
                            <label for="titulo">Título</label>
                                <input type="text" name="titulo" class="form-control @if($errors->first('titulo')) is-invalid @else is-valid @endif" value="{{ old('titulo') }}" placeholder="Título do Telefone" autofocus>
                            @if($errors->has('titulo'))
                                <span class="help-block" style="color: Red;">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('telefone') ? 'has-error' : '' }}">
                            <label for="numero">Número</label>
                                <input type="text" name="telefone" class="form-control @if($errors->first('telefone')) is-invalid @else is-valid @endif" value="{{ old('numero') }}" placeholder="Número do Telefone">
                            @if($errors->has('telefone'))
                                <span class="help-block" style="color: Red;">
                                    <strong>{{ $errors->first('telefone') }}</strong>
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
