<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- /meta -->
    
    <!-- css -->
    <link rel="stylesheet" href="{{URL::asset('assets/admin/css/simple-sidebar.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!-- /css -->
    
    <!-- scripts -->
    
    <!-- /scripts -->
    <title>@yield('title')</title>
</head>
<body>

<?php
@session_start();
if (@$_SESSION['user_id'] == null) {
  echo "<script>window.location='/'</script>";

}

?>
<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading"></div>
  <div class="list-group list-group-flush mt-4">
    <a href="{{route('admin.home')}}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-chart-line"></i> Dashboard</a>
    <a href="{{route('product.index')}}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-store"></i> Produtos</a>
    <a href="{{route('category.index')}}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-book"></i> Categorias</a>
    <a href="" onClick="alert('Em desenvolvimento!');" class="list-group-item list-group-item-action bg-light"><i class="far fa-images"></i> Banners</a>
    <a href="{{route('contact.index')}}"  class="list-group-item list-group-item-action bg-light"><i class="far fa-images"></i> Contato</a>
    <a href="{{route('user.index')}}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-users"></i> Usuários</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle">Exibir/Ocultar menu</button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<?php if (@$_SESSION['user_id'] != null) { ?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.logout') }}"><i class="fas fa-door-open"></i> Deslogar<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

<?php }?>
  <div class="container">
  @yield('content')
  </div>
  


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js "></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Menu Toggle Script -->
  <script>
  $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
  });
  </script>
  <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script>
  $(document).on('click','.delete',function(){
       let id = $(this).attr('data-name');
       $('#show-data-name').val(id);
  });
</script>  
</body>
</html>