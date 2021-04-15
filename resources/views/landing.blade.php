@extends('layouts.master')

@section('content')
<section style="height: 100vh; background-color:#2D2D2D">
  <div class="container" style="padding-top: 18vh">
    <div class="row justify-content-center">
      <div class="col-md-8 .offset-2" style="color:white; z-index:1;">
        <h1 class="text-center mb-3" style="font-size:7.29167vw;">Productividad supercargada</h1>
        <p class="text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla venenatis, 
          ac vitae ut varius massa. Nibh vitae cras nibh ultrices.</p>
          <div class="position-relative">
            <a class="position-absolute top-0 start-50 translate-middle btn cta bg">Conoce más¡ Si no quieres no</a>
          </div>
      </div>
      <div style="
        position:absolute;
        z-index: 0; 
        display: flex;
        align-items: center; 
        justify-content: center;">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets6.lottiefiles.com/datafiles/Kh0wQtxR5uZr7vf/data.json"  background="transparent"  
        speed="3.5"  style="display:flex; width: 60vw; height: 60vh;"loop  autoplay></lottie-player>
  </div>
    </div>
  </div>
</section>
<section id="funcion" style="height: 100vh; background-color:#FF5043; padding: 70px 100px;">
  <div class="container-fluid mb-4" >
    <div class="row align-items-center">
      <div class="col-md-6 mb-5">
        <h2 style="font-size: 7.5vw; background-color:white;">
          Rápido, Funcional y Seguro
        </h2>
        <p style="font-size: 2.25vw; color: white;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Amet, massa ut enim porttitor arcu elementum. Nibh sit pellentesque morbi tempor aliquet adipiscing nisl.
        </p>
      </div>
      <div class="col-md-6 align-content-center">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_qt8swvhl.json"  background="transparent"  speed="1"  
style="
width: 100%; 
height: 100%;"  loop  autoplay></lottie-player>
      </div>
    </div>
  </div>      
</section>
<section style="background-color:#FF5043; padding:100px 100px">  
  <div class="container-fluid" style="margin-bottom: 20vh; margin-top:20vh">
    <div class="row align-items-center position-relative">
      <div class="col-md-12" style="color:white; z-index:1;">
        <h4 class="text-center" style="font-size:7.29167vw;font-weight:400;">WUOW SO COOL¡ I WANT</h4>
      </div>
      <div class="col-mb-6 align-content-center"style="
        position:absolute;
        z-index: 0; 
        display: flex;
        align-items: center; 
        justify-content: center;">
       <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets4.lottiefiles.com/packages/lf20_27cgfczo.json"  background="transparent"  speed="1"  style="width: 70vw; height: 70vh;"  loop  autoplay></lottie-player>
      </div>
    </div>
  </div>
</section>
<section id="precios" style="height: 100vh; background-color:#FF5043">  
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-lg-5">
        <h3 class="text-white mt-5 text-center" style="font-size: 5vw;">Para estudiantes</h3>
        <p class="text-white mt-5 text-center" style="font-size: 9vw;">0$</p>
        <a class="btn cta bg mt-5">Conoce más¡ Si no quieres no</a>
      </div>
      <div class="col-md-6 mt-lg-5">
        <h3 class="text-white mt-5 text-center" style="font-size: 5vw;">Para equipos</h3>
        <p class="text-white mt-5 text-center" style="font-size: 9vw;">10$</p>
        <a class="btn cta bg mt-5 ">Conoce más¡ Si no quieres no</a>
      </div>
    </div>
  </div>
</section>
<section id="desarrollo" style="background-color:#2D2D2D">
  <div class="container" style="padding-top: 11vh">
    <div class="row justify-content-center">
      <div class="col-md-8 .offset-2" style="color:white; z-index:1;">
        <h2 class="text-center mb-3" style="font-size:7.29167vw;">Made by: Noé Hassiel</h2>          
      </div>
      <div class="col-md-8 d-inline-flex mt-4">
        <div href="" class="col-4">
          <img style="max-width:15vw;" src="{{ asset('img/laravel.svg') }}" alt="">
        </div>
        <div href="" class="col-4">
          <img style="max-width:15vw;" src="{{ asset('img/figma.png') }}" alt="">
        </div>  
        <div href="" class="col-4">
          <img style="max-width:15vw;" src="{{ asset('img/bootstrap.svg') }}" alt="">
        </div>     
      </div>
      </div>
    </div>
</section>
@endsection
