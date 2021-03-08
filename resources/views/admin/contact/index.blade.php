@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Informações do negócio</h1>
@stop

@section('content')
<div class="container">
<a href="{{route('contact.create')}}" type="button" class="btn btn-primary mt-4 mb-4">Cadastrar infomações do negócio</a>
    <div class="row">
        <div class="col-md-12 mt-4">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome da loja</th>
                        <th>E-mail</th>
                        <th>Número do Whatsapp</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->whatsapp_number}}</td>
                        <td>
                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                                <a href="{{route('contact.edit', $contact->id)}}"><i class="fas fa-edit text-info mr-2"></i></a>
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
</div>   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop