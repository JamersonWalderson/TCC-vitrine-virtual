@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar usuário</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="form-group">
                <div class="form-group">
                  <div class="form-group col-md-9">
                    <label for="inputName"><strong>Nome do usuário</strong></label>
                    <input name="name" value="{{$user->name}}" type="text" class="form-control" id="inputName" placeholder="Ex: j@merson, r0nielle, @dmin." required>
                    <small class="form-text text-muted">
                        Dica: Misture alguns caracteres especiais. 
                    </small>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group col-md-9">
                    <label for="inputEmail"><strong>E-mail</strong></label>
                    <input name="email" value="{{$user->email}}" type="email" class="form-control" id="inputEmail" placeholder="Ex: examplo@examplo.com" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group col-md-9">
                    <label for="inputLogin"><strong>Login</strong></label>
                    <input name="login" value="{{$user->login}}" type="text" class="form-control" id="inputLogin" placeholder="Ex: j@merson, r0nielle, @dmin." required>
                    <small class="form-text text-muted">
                        Dica: Misture alguns caracteres especiais. 
                    </small>
                  </div>
                </div>
                <div class="form-group">
                    <div class="form-group col-md-9">
                      <label for="inputPassworld"><strong>Senha</strong></label>
                      <input name="password" value="{{$user->password}}" type="text" class="form-control" id="inputPassword" placeholder="Ex: Roupas, acessórios, jóias, etc.." required>
                      <small class="form-text text-muted">
                        Dica: Evite senhas obvias, proteja seu sistema!
                      </small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group col-md-9">
                        <label for="inputLevel"><strong>Nível de acesso</label>
                        <select name="level" class="form-control" id="inputLevel" required>
                            <option value="1" {{ ( $user->level == 1) ? 'selected' : '' }}>Controle total</option>
                            <option value="2" {{ ( $user->level == 2) ? 'selected' : '' }}>Controle parcial</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <button name="bt-record" type="submit" class="btn btn-success">Cadastrar</button>
                </div>
              </div>
                
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