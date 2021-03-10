@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('content')
<div class="container">
    <a href="{{route('user.create')}}" type="button" class="btn btn-primary mt-4 mb-4">Cadastrar novo usuário</a>
    <div class="row">
        <div class="col-md-12 mt-4">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Login</th>
                        <th>Nível</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->login}}</td>
                        <td>
                            @if ($user->level == 0)
                                Desenvolvedor
                            @elseif ($user->level == 1)
                                Controle total
                            @elseif ($user->level == 2)
                                Controle parcial
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                <a  href="{{route('user.edit', $user->id)}}"><i class="fas fa-edit text-info mr-2"></i></a>
                                @csrf
                                @method('delete')
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