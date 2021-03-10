@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar informações</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <form action="{{route('contact.update', $contact->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                  <div class="form-group col-md-9">
                    <label for="inputName"><strong>Nome da vitrine</strong></label>
                    <input name="name" type="text" value="{{ $contact->name }}" class="form-control" id="inputName" placeholder="Ex: Roupas, acessórios, jóias, etc.." required>
                  </div>
                  <div class="form-group col-md-9">
                    <label for="inputName"><strong>E-mail</strong></label>
                    <input name="email" type="text" value="{{ $contact->email }}" class="form-control" id="inputName" placeholder="Ex: exemplo@exemplo.com" required>
                  </div>
                  <div class="form-group col-md-9">
                    <label for="inputName"><strong>Whatsapp</strong></label>
                    <input name="whatsapp_number" type="text" value="{{ $contact->whatsapp_number }}" class="form-control" id="inputName" placeholder="Ex: DDD e número sem espaços" required>
                  </div>
                </div>
                <div class="form-group">
                  <a class="btn btn-danger" href="{{ route('contact.index') }}">Cancelar</a>
                  <button name="bt-record" type="submit" class="btn btn-success">Cadastrar</button>
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