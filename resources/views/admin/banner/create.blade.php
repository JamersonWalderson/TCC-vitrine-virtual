@extends('adminlte::page')

@section('title', 'Banner - adicionar novo banner ao site')

@section('content_header')
    <h1>Cadastrar banner</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputName"><strong>Nome descritivo do banner</strong></label>
                    <input name="name" type="text" class="form-control" id="inputName" placeholder="Ex: banner promoção natal" required>
                </div>
                <div class="form-group">
                    <img id="inputPreview" src="" class="img-fluid" alt="imagem do produto" style="width: 150px; height: 100px;">

                    <div class="custom-file">
                        <input name="image" type="file" id="inputImage" accept="image/*" required>
                        <label for="inputImage">Selecione o banner</label>
                    </div>

                    <small id="inputImage" class="form-text text-muted"><strong>Procure compactar antes a imagem para reduzir seu tamanho e não deixar seu site pesado.</strong></small>
                </div>
                <div class="form-group">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
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