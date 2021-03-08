@extends('adminlte::page')

@section('title', 'Produtos - edição de produtos')

@section('content_header')
    <h1>Editar produtos</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-row">
                  <div class="form-group col-md-9">
                    <label for="inputName"><strong>Nome do produto</strong></label>
                    <input name="name" value="{{ $product->name }}" type="text" class="form-control" id="inputName" placeholder="Ex: Cadeira de praia" required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="InputPrice"><strong>Preço</strong></label>
                    <input name="price" value="{{ $product->price }}" type="number" class="form-control" id="InputPrice" placeholder="Ex: 29.00" required>
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
                    <option value="0" {{ ($product->disponibility == 1) ? '' : 'selected'}}>Disponível</option>
                    <option value="1" {{ ($product->disponibility == 0) ? '' : 'selected'}}>Indisponível</option> 
                </select>
                </div>
                <div class="form-group">
                    <label for="inputShortDescription"><strong>Descrição curta</strong></label>
                    <input name="shortDescription" value="{{ $product->short_description }}" type="text" class="form-control" id="inputShortDescription" placeholder="Ex: Cadeira de praia em aluminio cores variadas" required>
                </div>
                <div class="form-group">
                    <label for="inputLongDescription"><strong>Descrição longa</strong></label>
                    <textarea name="longDescription" class="form-control" id="inputLongDescription" maxlength="250" rows="3" placeholder="Ex: Dobrável, fácil e prática de carregar, a Cadeira Alta é ideal para ser levada para praia, camping, pescaria ou para aquela cervejinha de final de tarde com os amigos na varanda." required>{{ $product->long_description }}</textarea>
                </div>
                <div class="form-group">
                    <img id="inputPreview" src="/assets/image/product/uploads/{{ $product->image }}" class="img-fluid" alt="imagem do produto" style="width: 150px; height: 100px;">
                    <div class="custom-file">
                        <input name="image" value="{{ $product->image }}" type="file" id="inputImage" accept="image/*" required>
                        <label for="inputImage">Selecione a imagem do produto</label>
                    </div>
                    <small id="inputImage" class="form-text text-muted"><strong>Procure compactar antes a imagem para reduzir seu tamanho e não deixar seu site pesado.</strong></small>
                </div>
                <div class="form-group">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
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