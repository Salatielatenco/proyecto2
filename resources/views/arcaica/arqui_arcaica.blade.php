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
              <img src="{{ asset('img/arcaica/arcaica2.jpg')}}"class="d-block w-100" alt="..." style="width: 100px; height:600px">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/arcaica/arcaica3.jpg')}}" class="d-block w-100" alt="..." style="width: 100px; height:600px">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/arcaica/arcaica10.jpg')}}"  class="d-block w-100" alt="..." style="width: 100px; height:600px">
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
 <!---card con informacion e imganes --->
    <div class="container-fluid">
      <div class="row mt-3">
        <div class="col text-center">
          <div class="col"></div>
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/arcaica/arcaica4.png')}}" alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">vLa arquitectura arcaica también llamada pelásgica, presenta varios períodos según evoluciona la manera de construir
                
              </p>
        
            </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/arcaica/arcaica5.jpg')}}" alt="Card image cap" style="height: 245px;">
              <div class="card-body">
                <p class="card-text">Las columnas eran más estilizadas y elegantes,  este estilo se encontró en el este de Grecia y en algunas islas cercanas. Su capitel estaba adornado con volutas (decoraciones en forma de espiral ).

                  Corintio</p>
                
              </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/arcaica/arcaica6.jpg')}}" alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">Las columnas dóricas eran bastantes fornidas y el capitel era plano. En la Grecia antigua y en las colonias del sur de Italia y Sicilia, este estilo era el de mayor frecuencia.</p>
            
            </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/arcaica/arcaica7.jpg')}}" alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">De acuerdo a  la posición y el número de columnas que adornan las fachadas, se distinguen cuatro tipos principales de templos:</p>
              
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
                  <img class="d-block w-100" src="{{ asset('img/arcaica/arcaica8.jpg')}}" alt="First slide" style="width: 100px; height:410px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/arcaica/arcaica9.jpg')}}"alt="Second slide" style="width: 100px; height:410px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/arcaica/arcaica10.jpg')}}" alt="Third slide" style="width: 100px; height:410px">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row">
                  <div class="col">
                    <img src="{{ asset('img/arcaica/arcaica3.jpg')}}"  class="d-block w-100" alt="..." style="width: 80px; height:200px" >
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col">
                    <img src="{{ asset('img/arcaica/arcaica5.jpg')}}" class="d-block w-100" alt="..." style="width: 80px; height:200px" >
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection
    

    
