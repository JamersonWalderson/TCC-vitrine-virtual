@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<style>

.dash-button {
    background-color: #343a40;
    color: white;
    height: 100px;
    text-align: center;

}
.dash-button a {
    color: white;
}

</style>

<div class="row justify-content-start">
    <div class="col-md-3 m-2 rounded d-flex justify-content-center align-items-center dash-button">
        <h1 class="text-center"><a href="{{ route('product.index') }}"><i class="fas fa-store"></i> Produtos</a></h1>
    </div>
    <div class="col-md-3 m-2 rounded d-flex justify-content-center align-items-center dash-button">
        <h1 class="text-center"><a href="{{ route('category.index') }}"><i class="fas fa-store"></i> Categorias</a></h1>
    </div>
    <div class="col-md-3 m-2 rounded d-flex justify-content-center align-items-center dash-button">
        <h1 class="text-center"><a href="{{ route('banner.index') }}"><i class="fas fa-images"></i> Banner</a><h1>
    </div>
    <div class="col-md-3 m-2 rounded d-flex justify-content-center align-items-center dash-button">
        <h1 class="text-center"><a href="{{ route('user.index') }}"><i class="fas fa-user"></i> Usuários</a></h1>
    </div>
    <div class="col-md-3 m-2 rounded d-flex justify-content-center align-items-center dash-button">
        <h1 class="text-center"><a href="{{ route('contact.index') }}"><i class="fas fa-id-card"></i> Contatos</a></h1>
    </div>
</div>

@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop