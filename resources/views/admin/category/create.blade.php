@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <div class="form-group col-md-9">
                    <label for="inputName"><strong>Nome da categoria</strong></label>
                    <input name="name" type="text" class="form-control" id="inputName" placeholder="Ex: Roupas, acessórios, jóias, etc.." required>
                  </div>
                  <div class="form-group">
                    <a class="btn btn-danger" href="{{ route('category.index') }}">Cancelar</a>
                    <button name="bt-record" type="submit" class="btn btn-success">Cadastrar</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop