@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">
                <div class="card-header"><h3>Hola {{ Auth::user()->name }}</h3></div>
                <div class="card-body">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_2RSPTv.json" 
                    mode="bounce" background="transparent"  speed="1"  style="width: 100%; height: 100%;" loop   autoplay></lottie-player>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
