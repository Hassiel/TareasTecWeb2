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
        speed="3.5"  style="display:flex; width: 550px; height: 550px;"loop  autoplay></lottie-player>
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
  <div class="container-fluid">
    <div class="row align-items-center position-relative">
      <div class="col-mb-6 align-content-center"style="
        position:relative;
        z-index: 0; 
        display: flex;
        align-items: center; 
        justify-content: center;">
       <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets4.lottiefiles.com/packages/lf20_27cgfczo.json"  background="transparent"  speed="1"  style="width: 70%; height: 70%;"  loop  autoplay></lottie-player>
      </div>
    </div>
  </div>
</section>
<section id="precios" style="height: 100vh; background-color:#FF5043">  
    
</section>
<section id="desarrollo" style="height: 100vh; background-color:#2D2D2D">

</section>
@endsection
