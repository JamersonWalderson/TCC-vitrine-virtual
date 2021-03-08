@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
<div class="container">
    
    <a href="{{route('product.create')}}" type="button" class="btn btn-primary mt-4 mb-4">Cadastrar novo produto</a>
    <div class="row">
        <div class="col-md-12 mt-4">
            <table id="example" class="table table-striped table-bordered" style="width:100%;">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Disponibilidade</th>
                        <th>Descrição curta</th>
                        <!-- ocultado temporariamente
                        <th>Descrição longa</th>
                        /ocultado temporariamente -->
                        <th>URL imagem</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr class="table-{{ $product->disponibility == 1 ? 'success' : 'danger' }}">
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>
                            @foreach ($categories as $category)
                                @if ($product->category_id == $category->id)
                                    {{$category->name}}
                                @endif
                            @endforeach
                        </td>
                        <td>{{$product->price}}</td>
                        <td>
                            {{ $product->disponibility == 1 ? 'Disponivel' : 'Indisponivel' }}
                        </td>
                        <td>{{$product->short_description}}</td>
                        <!-- ocultado temporariamente
                        <td>{{$product->long_description}}</td>
                        /ocultado temporariamente -->
                        <td><img src="/assets/image/product/uploads/{{$product->image}}" style="width: 120px; height: 90px;"></td>
                        <td>
                            <form action="{{route('product.destroy', $product->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <a href=""><i class="fas fa-eye text-primary mr-2"></i></a>
                                <!--<a href="{{route('product.relation', [$product->id, $category->id])}}"><i class="fas fa-edit text-info mr-2"></i></a>-->
                                <a href="{{route('product.edit', $product->id)}}"><i class="fas fa-edit text-info mr-2"></i></a>
                                <button type="submit" class="bt-delete" onclick="return confirm('Deseja realmente deletar este registro?')" style=""><i class="fas fa-trash mr-2 text-danger"></i></button>
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
