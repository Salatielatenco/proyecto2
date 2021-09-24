@extends('layout.plantilla')
@section('titulo','popular')
@section('titulodepagina' ,'Bienvenido Arquictetura de Arcaica')

@section('contenido')
<div class="container">
    <div class="row">
      <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/popular/popular1.jpg')}}" class="d-block w-100" alt="..." style="width: 100px; height:600px">
            </div>
            <div class="carousel-item">
              <img src= "{{ asset('img/popular/popular2.jpg')}}" class="d-block w-100" alt="..." style="width: 100px; height:600px">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/popular/popular3.jpg')}}"  class="d-block w-100" alt="..." style="width: 100px; height:600px">
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
            <img class="card-img-top" src="{{ asset('img/popular/popular4.jpg')}}"  alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">La arquitectura popular, como el arte popular, es la arquitectura de las clases populares, realizada por los propios usuarios o por artesanos con escasa instrucción,</p>
              
            </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/popular/popular5.jpg')}}"  alt="Card image cap" style="height: 245px;">
              <div class="card-body">
                <p class="card-text">Las construcciones y edificios de la arquitectura popular son funcionales adecuándose siempre a la finalidad prevista y a los materiales disponibles en cada lugar</p>
              
              </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/popular/popular6.jpg')}}"  alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">Arquitectura popular o arquitectura vernácula, son términos que se aplican indistintamente a las construcciones o a los edificios que presentan rasgos o características tipológicas comunes en determinados ámbitos geográficos</p>
            
            </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/popular/popular7.jpg')}}"  alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">construyen diversos tipos de edificios, básicamente los alojamientos de las áreas rurales, así como diversos tipos de edificaciones auxiliares destinadas a fines propios o secundarios, relacionados con la vida y el trabajo como pueden ser las construcciones de piedra para uso agrícola, los corrales, las pallozas, los hórreos, las bordas</p>
            
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
                  <img class="d-block w-100" src="{{ asset('img/popular/popular8.jpg')}}"  alt="First slide" style="width: 100px; height:410px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/popular/popular3.jpg')}}"  alt="Second slide" style="width: 100px; height:410px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/popular/popular2.jpg')}}"  alt="Third slide" style="width: 100px; height:410px">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row">
                  <div class="col">
                    <img src="{{ asset('img/popular/popular9.jpg')}}"   class="d-block w-100" alt="..." style="width: 80px; height:200px" >
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col">
                    <img src="{{ asset('img/popular/popular10.jpg')}}"  class="d-block w-100" alt="..." style="width: 80px; height:200px" >
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection
    