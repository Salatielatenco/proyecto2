@extends('layout.plantilla')
@section('titulo','Arcaica')
@section('titulodepagina' ,'Bienvenido Arquictetura de Arcaica')

@section('contenido')
<div class="container">
    <div class="row">
      <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/civil/civil1.jpg')}}" class="d-block w-100" alt="..." style="width: 100px; height:600px">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/civil/civil2.jpg')}}" class="d-block w-100" alt="..." style="width: 100px; height:600px">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/civil/civil3.jpg')}}" class="d-block w-100" alt="..." style="width: 100px; height:600px">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
      </div>
    </div>
</div>

    <div class="container-fluid">
      <div class="row mt-3">
        <div class="col text-center">
          <div class="col"></div>
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/civil/civil4.jpg')}}" alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">ARQUITECTURAArquitectura civil  La arquitectura civil se encarga de la construcción de edificios, casas, escuelas, hospitales, para el funcionamiento de la vida en sociedad.</p>
              
            </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/civil/civil5.jpg')}}" alt="Card image cap" style="height: 245px;">
              <div class="card-body">
                <p class="card-text"> la arquitectura civil se va modificando según el territorio y contexto social. Está determinada por numerosos factores: el espacio, el lugar,</p>
              
              </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/civil/civil8.jpg')}}" alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">la arquitectura civil se materializó, a lo largo de la historia, a través de numerosos arquitectos famosos y en distintos estilos, como el gótico, el barroco, el clásico, etc. </p>
          
            </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/civil/civil9.jpg')}}" alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">Ropero de muy buena calidad a un increible precio</p>
              <div class="row">
                  <div class="col"><p><span style="color:width"><s>$12,000</s></span></p></div>
                  <div class="col"><p><span style="color:yellow"><ins>$10,000</ins></span></p></div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!---Pequeño carrucel y dos imagenes --->
    <div class="container mt-3">
        <div class="row">
          <div class="col-sm-8">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ asset('img/civil/civil10.jpg')}}" alt="First slide" style="width: 100px; height:410px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/civil/civil1.jpg')}}" alt="Second slide" style="width: 100px; height:410px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/civil/civil3.jpg')}}" alt="Third slide" style="width: 100px; height:410px">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row">
                  <div class="col">
                    <img src="{{ asset('img/civil/civil2.jpg')}}"  class="d-block w-100" alt="..." style="width: 80px; height:200px" >
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col">
                    <img src="{{ asset('img/civil/civil6.jpg')}}" class="d-block w-100" alt="..." style="width: 80px; height:200px" >
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection
    