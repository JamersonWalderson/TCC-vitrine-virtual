@extends('adminlte::page')

@section('title', 'Produtos - adicionar novo produto ao site')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-9">
                    <label for="inputName"><strong>Nome do produto</strong></label>
                    <input name="name" type="text" class="form-control" id="inputName" placeholder="Ex: Cadeira de praia" required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="InputPrice"><strong>Preço</strong></label>
                    <input name="price" type="number" class="form-control" id="InputPrice" placeholder="Ex: 29.00" required>
                  </div>
                </div>
                <div class="form-group">
                <label for="inputCategory"><strong>Categoria</strong></label>
                <select name="category" class="form-control" id="inputCategory" required>
                    <option selected></option>
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                <label for="inputDisponibility"><strong>Disponibilidade</label>
                <select name="disponibility" class="form-control" id="inputDisponibility" required>
                    <option selected></option>
                    <option value="1">Disponível</option>
                    <option value="0">Indisponível</option> 
                </select>
                </div>
                <div class="form-group">
                    <label for="inputShortDescription"><strong>Descrição curta</strong></label>
                    <input name="shortDescription" type="text" class="form-control" id="inputShortDescription" placeholder="Ex: Cadeira de praia em aluminio cores variadas" required>
                </div>
                <div class="form-group">
                    <label for="inputLongDescription"><strong>Descrição longa</strong></label>
                    <textarea name="longDescription" class="form-control" id="inputLongDescription" maxlength="250" rows="3" placeholder="Ex: Dobrável, fácil e prática de carregar, a Cadeira Alta é ideal para ser levada para praia, camping, pescaria ou para aquela cervejinha de final de tarde com os amigos na varanda." required></textarea>
                </div>
                <div class="form-group">
                    <img id="inputPreview" src="" class="img-fluid" alt="imagem do produto" style="width: 150px; height: 100px;">

                    <div class="custom-file">
                        <input name="image" type="file" id="inputImage" accept="image/*" required>
                        <label for="inputImage">Selecione a imagem do produto</label>
                    </div>

                    <small id="inputImage" class="form-text text-muted"><strong>Procure compactar antes a imagem para reduzir seu tamanho e não deixar seu site pesado.</strong></small>
                </div>
                <div class="form-group">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <a class="btn btn-danger" href="{{ route('product.index') }}">Cancelar</a>
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