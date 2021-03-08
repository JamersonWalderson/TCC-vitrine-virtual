@extends('adminlte::page')

@section('title', 'Categorias - editar categoria')

@section('content_header')
    <h1>Editar categoria</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                  <div class="form-group col-md-9">
                    <label for="inputName"><strong>Nome da categoria</strong></label>
                    <input name="name" type="text" class="form-control" id="inputName" placeholder="Ex: Roupas, acessórios, jóias, etc.." value="{{ $category->name }}"required>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <button name="bt-record" type="submit" class="btn btn-primary">Atualizar</button>
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
