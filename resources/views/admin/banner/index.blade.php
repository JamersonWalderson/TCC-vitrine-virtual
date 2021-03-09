@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Banner</h1>
@stop

@section('content')
<div class="container">
    
    <a href="{{ route('banner.create') }}" type="button" class="btn btn-primary mt-4 mb-4">Cadastrar novo banner</a>
    <div class="row">
        <div class="col-md-12 mt-4">
            <table id="example" class="table table-striped table-bordered" style="width:100%;">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Imagem</th>
                        <th>URL imagem</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><img src="/assets/image/product/uploads/ " style="width: 120px; height: 90px;"></td>
                        <td>
                            <form action=" " method="POST">
                                @csrf
                                @method('delete')
                                <a href=""><i class="fas fa-eye text-primary mr-2"></i></a>
                                <a href=" "><i class="fas fa-edit text-info mr-2"></i></a>
                                <button type="submit" class="bt-delete" onclick="return confirm('Deseja realmente deletar este registro?')" style=""><i class="fas fa-trash mr-2 text-danger"></i></button>
                            </form>
                        </td>
                    </tr>
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
