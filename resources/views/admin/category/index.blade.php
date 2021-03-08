@extends('adminlte::page')

@section('title', 'Categorias - listagem das categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
<div class="container">
    
    <a href="{{route('category.create')}}" type="button" class="btn btn-primary mt-4 mb-4">Cadastrar nova categoria</a>
    <div class="row">
        <div class="col-md-12 mt-4">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome da categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                <a href="{{route('category.edit', $category->id)}}"><i class="fas fa-edit text-info mr-2"></i></a>
                                @csrf
                                @method('delete')
                                <button type="submit" class="bt-delete" onclick="return confirm('Deseja realmente deletar este registro?')"><i class="fas fa-trash text-danger mr-2"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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