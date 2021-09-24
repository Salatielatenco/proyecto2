@extends('layout.plantilla')
@section('titulo','Arcaica')
@section('titulodepagina', 'Bienvenido Arquictetura de Arcaica')

@section('contenido')
<div class="container">
    <div class="row">
      <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/religiosa/religiosa1.jpg')}}" class="d-block w-100" alt="..." style="width: 100px; height:600px">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/religiosa/religiosa2.jpg')}}" class="d-block w-100" alt="..." style="width: 100px; height:600px">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/religiosa/religiosa3.jpg')}}"  class="d-block w-100" alt="..." style="width: 100px; height:600px">
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
            <img class="card-img-top" src="{{ asset('img/religiosa/religiosa4.jpg')}}"  alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">La arquitectura religiosa se ocupa del diseño y la construcción de los espacios de culto sagrados o espacios de oración, tales como iglesias, mezquitas, estupas, sinagogas y templos.</p>
            
            </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/religiosa/religiosa5.jpg')}}"  alt="Card image cap" style="height: 245px;">
              <div class="card-body">
                <p class="card-text">A veces la arquitectura religiosa es llamada espacio sacro. El arquitecto Norman L. Koonce ha sugerido que el objetivo de la arquitectura religiosa es hacer "transparente la frontera entre la materia y la mente, la carne y el espíritu." </p>
              
              </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/religiosa/religiosa6.jpg')}}"  alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">En los cultos que veneran a los dioses, ellos son objetos e iconos y seres más allá de ellos (trascendentes). Se los puede encontrar en el edificio sagrado pero el propio edificio no puede albergarlos. La arquitectura sagrada es, en parte, un intento de capturar la presencia divina.</p>
            
            </div>
          </div>
        </div>
        <div class="col text-center">
          <div class="card text-white bg-dark " style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/religiosa/religiosa7.jpg')}}"  alt="Card image cap" style="height: 245px;">
            <div class="card-body">
              <p class="card-text">las edificaciones religiosas a menudo evolucionaron durante períodos de varios siglos y eran las mayores construcciones del mundo, antes de la existencia de los modernos rascacielos. Mientras que los diversos estilos empleados en la arquitectura religiosa a veces reflejan tendencias de otras construcciones,</p>
              
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
                  <img class="d-block w-100" src="{{ asset('img/religiosa/religiosa8.jpg')}}"  alt="First slide" style="width: 100px; height:410px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/religiosa/religiosa9.jpg')}}"  alt="Second slide" style="width: 100px; height:410px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/religiosa/religiosa10.jpg')}}"  alt="Third slide" style="width: 100px; height:410px">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row">
                  <div class="col">
                    <img src="{{ asset('img/religiosa/religiosa2.jpg')}}"   class="d-block w-100" alt="..." style="width: 80px; height:200px" >
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col">
                    <img src="{{ asset('img/religiosa/religiosa4.jpg')}}"  class="d-block w-100" alt="..." style="width: 80px; height:200px" >
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection
    