@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastrar informações da loja</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <div class="form-group col-md-9">
                    <label for="inputName"><strong>Nome da vitrine</strong></label>
                    <input name="name" type="text" class="form-control" id="inputName" placeholder="Ex: Roupas, acessórios, jóias, etc.." required>
                  </div>
                  <div class="form-group col-md-9">
                    <label for="inputName"><strong>E-mail</strong></label>
                    <input name="email" type="text" class="form-control" id="inputName" placeholder="Ex: exemplo@exemplo.com" required>
                  </div>
                  <div class="form-group col-md-9">
                    <label for="inputName"><strong>Whatsapp</strong></label>
                    <input name="whatsapp_number" type="text" class="form-control" id="inputName" placeholder="Ex: 55 DDD e número sem espaços" required>
                    <small class="form-text text-muted">Exemplo: 558293419055</small>
                  </div>
                </div>
                <div class="form-group">
                    <button name="bt-record" type="submit" class="btn btn-success">Atualizar</button>
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