@extends('layout.plantilla')

@section('titulo', 'Welcome')
    
@section('titulodepagina','Bienvenido')
    
@section('contenido')
<div class="container">
    <div class="row">
      <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/a.jpg" class="d-block w-100" alt="..." style="width: 100px; height:600px">
            </div>
            <div class="carousel-item">
              <img src="img/recamara.png" class="d-block w-100" alt="..." style="width: 100px; height:600px">
            </div>
            <div class="carousel-item">
              <img src="img/si.jpg" class="d-block w-100" alt="..." style="width: 100px; height:600px">
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
!---Promociones-->
    <div class="container-fluid">
      <div class="row mt-3">
        <div class="col text-center">
          <div class="col"></div>
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="img/ess.jpg" alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">Sillon colchonable, a un gran precio, y en una gran promoción</p>
              <div class="row">
                <div class="col"><p><span style="color:width"><s>$2,400</s></span></p></div>
                <div class="col"><p><span style="color:red"><ins>$2,000</ins></span></p></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
              <img class="card-img-top" src="img/sillones.jpg" alt="Card image cap" style="height: 245px;">
              <div class="card-body">
                <p class="card-text">Sofas acolchonables a un ecxelente precio, haz tu pedido</p>
                <div class="row">
                  <div class="col"><p><span style="color:width"><s>$15,000</s></span></p></div>
                  <div class="col"><p><span style="color:yellow"><ins>$10,000</ins></span></p></div>
                </div>
              </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="img/mesa.jpg" alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">Gran promoción de mesa con 4 sillas a un gran precio</p>
              <div class="row">
                  <div class="col"><p><span style="color:width"><s>$10,000</s></span></p></div>
                  <div class="col"><p><span style="color:yellow"><ins>$8,000</ins></span></p></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="img/roper.jpg" alt="Card image cap" style="height: 245px;">
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
                  <img class="d-block w-100" src="img/x.jpg" alt="First slide" style="width: 100px; height:410px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/coo.jpg" alt="Second slide" style="width: 100px; height:410px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/mue.jpg" alt="Third slide" style="width: 100px; height:410px">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row">
                  <div class="col">
                    <img src="img/descuento3.jpg"  class="d-block w-100" alt="..." style="width: 80px; height:200px" >
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col">
                    <img src="img/descuento.jpg" class="d-block w-100" alt="..." style="width: 80px; height:200px" >
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection