@extends('site.layouts.master')
@section('title', 'Bem vindo a Vitrine Virtual')
@section('content')

<!-------- carousel -------->
<div class="row">
    <div class="col">
        <div id="carouselBanner" class="carousel slide banner" data-ride="carousel">
            <div class="carousel-inner">
            @foreach($banners as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img class="d-block w-100 img-fluid img-banner" src="/assets/image/banner/uploads/{{$banner->image}}" alt="{{$banner->name}}">
                </div>
            @endforeach
            </div>
           
            <a class="carousel-control-prev" href="#carouselBanner" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselBanner" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
            
        </div>
    </div>
</div>
<!-------- /carousel -------->

<!-------- container -------->
<div class="container">
    <div class="row mt-4">
@foreach($products as $product)
        <div class='col-lg-3 col-md-6 mb-4'>
            <a class="custom-card" href="#" data-toggle="modal" data-target="#productDescription" onClick="getData('{{ $product->id }}', '{{ $product->name }}', '{{ $product->price }}', '{{ $product->short_description }}', '{{ $product->long_description }}', '{{ $product->image }}')">
                <div class='card card-mobile'>
                    <div class='card h-100' >
                        <img class='img-fluid card-img' src="/assets/image/product/uploads/{{$product->image}}" alt='Imagem do produto' style='height: 250px;'>
                    </div>
                    <div class='card-body'>
                        <h4 class='card-title'>
                            <h5>R$ {{$product->price}} @if($product->disponibility == 0) <span class="badge badge-danger justify-content-end">Indisponível</span> @endif</h5>  
                        </h4>
                        <p style="text-transform: uppercase;">{{ $product->name }}</p>
                        <p class='card-text text-secondary'>{{ $product->short_description }}</p>
                    </div>
                    <div class='card-footer h-100 m-0 p-0'>
                    <!-- card footer-->    
                    </div>
                </div>
            </a>
        </div>
@endforeach
    </div>
    <!-- Modal -->
    <div class="modal fade" id="productDescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <!-- name product -->
            <h5 class="modal-title" id="modalProductName"></h5>
            <!-- /name product -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <img class="rounded img-fluid" id="modalProducImage" src="" alt="Imagem do produto">
            <p id="modalProductLongDescription"> </p>
        </div>
        <div class="modal-footer">
            <!-- <a class='btn btn-success w-100' target="_blank" href=""><i class="fab fa-whatsapp"></i> Mais informações<a> -->
        </div>
        <div class="container-fluid">
            <a class="btn btn-danger d-flex justify-content-center mb-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Compre agora ou obtenha mais informações
            </a>
            <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="form-group">
                    <input name="inputClientName" type="text" class="form-control" id="formGroupExampleInput" placeholder="* Nome e sobrenome" required>
                </div>
                <div class="form-group">
                    <input name="inputClientEmail" type="text" class="form-control" id="formGroupExampleInput2" placeholder="* Digite seu e-mail" required>
                </div>
                <button onClick="sendMessage()" class="btn border border-success text-success w-100">Mais infomações</button>
            </div>
            </div> 
        </div>     
        </div>
    </div>
    </div>
</div>
<!-------- /container -------->

<!-- Loading modal data -->
<script type="text/javascript">
    function getData(id, name, price, short_description, long_description, image) {
        document.getElementById('modalProductName').innerHTML = name;
        document.getElementById('modalProducImage').src= '/assets/image/product/uploads/' + image;
        document.getElementById('modalProductLongDescription').innerHTML = long_description;
    }
</script>

<script type="text/javascript">
    function sendMessage(){
        var name = $("input[name=inputClientName]").val();
        var email = $("input[name=inputClientEmail]").val();
        var message = $("input[name=inputMessage]").val();
        var productSelected = document.getElementById('modalProductName').value;

        window.open(
            "https://api.whatsapp.com/send?phone={{$contacts->whatsapp_number}}&text=Contato%20realizado%20atravez%20do%20site.%20Meu%20nome%20%C3%A9%20 " + name + "%20e%20possuo%20interesse%20no%20produto%20" + productSelected + "%20E-mail%3A%20 " + email +"."
        );
    }
</script>
@endsection
