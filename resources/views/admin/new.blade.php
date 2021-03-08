<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h1>Falta pouco..</h1>
                <form action="{{route('new.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col mb-2">
                            <!-- <label for="inputName"><strong>Nome da vitrine</strong></label>  -->
                            <input name="storeName" type="text" class="form-control" id="inputName" placeholder="Nome da vitrine" required>                   
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <!-- <label for="inputName"><strong>E-mail para contato</strong></label>  -->
                            <input name="email" type="text" class="form-control" id="inputName" placeholder="E-mail que os clientes entrarão em contato" required>
                            <small class="form-text text-muted">Ex: exemplo@exemplo.com</small>
                        </div>
                        <div class="form-group col">
                            <!-- <label for="inputName"><strong>Whatsapp para contato e envio dos pedidos</strong></label>   -->
                            <input name="whatsapp_number" type="text" class="form-control" id="inputName" placeholder="Whatsapp para contato e envio dos pedidos" required>
                            <small class="form-text text-muted">Exemplo: 55 DDD e número sem espaços, 558293419055</small>
                        </div>
                    </div>
                    <!-- Cadastro da conta -->
                    <div class="form-row">
                        <div class="form-group col">
                            <input name="name" type="text" class="form-control" id="inputName" placeholder="Nome completo do usuário" required>
                        </div>
                        <div class="form-gruop col">
                            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Informe o e-mail vinculado a este usuário" required>
                            <small class="form-text text-muted">Ex: exemplo@exemplo.com</small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input name="login" type="text" class="form-control" id="inputLogin" placeholder="login" required>
                            <small class="form-text text-muted">Dica: Misture alguns caracteres especiais.</small>
                        </div>
                        <div class="form-gruop col">
                            <input name="password" type="text" class="form-control" id="inputPassworld" placeholder="Digite sua senha" required>
                          <small class="form-text text-muted">Dica: Evite senhas obvias, proteja seu sistema!</small>
                        </div>
                        <div class="form-group col">
                            <select name="level" class="form-control" id="inputLevel" required>
                                <option selected></option>
                                <option value="1">Controle total</option>
                                <option value="2">Controle parcial</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Concluir</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>