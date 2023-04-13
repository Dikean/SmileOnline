<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{config('app.name')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     
        <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
    <!-- Styles -->
        <style>
            .bg_container{
                background-color: red;
            }
            body {
                font-family: 'Fredoka One', cursive;
}
.title {
  font-size: 46px;
  color: white;
}
.button {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  box-shadow: 2px 2px 2px rgba(0,0,0,0.5);
}
.button1 {
  background-color: transparent;
  color: #333;
  padding: 10px 20px;
  border-radius: 5px;
  border: 2px solid #333;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
           </style>
    </head>
    <body  style="background-color: #646ee3;">
        <!-- MENU-->
    <nav class="navbar navbar-light ">
  <div class="container">
    <a class="navbar-brand" href="/" style="margin-left: -4%;">
      <img src="{{ asset('img/img_odontologia/DienteHome.png') }}" alt=""  height="50" class="d-inline-block align-text-center">
     SmileOnline
    </a>    
    @if (Route::has('login'))
    <div class="d-flex">
    @auth
    <a  href="{{ url('/home') }}" class="button1" >Home</a>
    @else    
    <a  href="{{ route('login') }}" class="button1" >Login</a>
    @if (Route::has('register'))
      <a href="{{ route('register') }}" class="btn btnsuccess me-2 mt-1" >Register</a>
      @endif
                    @endauth
        </div>
        @endif
  </div>
</nav>

<!--- hero page -->
<div class="container mt-5 ">

  <div class="row">
      <div class="col-md-6 ">
              <p class=" title">Una sonrisa saludable está a solo un clic de distancia.</p>
               <p>Las citas odontológicas en línea ofrecen comodidad, accesibilidad y flexibilidad para recibir atención dental de manera eficiente desde cualquier lugar.</p> 
               <a href="{{ route('login') }}" class="button" >Start</a>
   
      </div>

     <div class="col-md-6">

     <img id="floating-image" src="{{ asset('img/img_odontologia/docto_r.png') }}"  class="d-none d-sm-block"   style="position:absolute; margin-top:8%; width: 40%; margin-left:5%">
      </div>
</div>

</div>


 <!-- gif mouse-->
<div class="container mt-5 d-none d-sm-block">
  <div class="row justify-content-center">
    <div class="col-md-4" style="margin-left: 300px;">
      <img src="{{ asset('img/img_odontologia/scroll_down.gif') }}" class="img-fluid" alt="Your GIF" style="width: 70px;">
    </div>
  
  </div>
</div>

<!--content 2-->
<div class="mt-4" style="background-color: #142c4c;">
    
  <div class="container ">
    <div class="row">
        <div class="col-md-4 mt-5">
        <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <i class="bi bi-1-square-fill"></i>
      Agenda tus citas dentales en línea, sin esperas ni demoras.
</div>
        </div>
        <div class="col-md-4 mt-5">
        <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <i class="bi bi-2-square-fill"></i> Ahorra tiempo y dinero en tus citas de odontología.
  </div>
        </div>
        <div class="col-md-4 mt-5">
     
         <div class="shadow-sm p-3 mb-5 bg-white rounded">
         <i class="bi bi-3-square-fill"></i>   El futuro de la odontología ya está aquí: en línea y a tu alcance.
         </div>
          </div>
    </div>

<!-- Imagen conten 2 -->
    <div class="row justify-content-center">
     <div class="col-md-4" >
      <img src="{{ asset('img/img_odontologia/manos.png') }}" class="img-fluid" alt="Your GIF" style="width: 700px;">
      </div>


  
  </div>

  <!-- columna 2 -->
  <div class="row">
        <div class="col-md-4 mt-5">
        <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <i class="bi bi-4-square-fill"></i>
        Atención dental personalizada en línea, adaptada a tus necesidades.
</div>
        </div>
        <div class="col-md-4 mt-5">
        <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <i class="bi bi-5-square-fill"></i> La tecnología te ayuda a mantener tu salud bucal al día.
  </div>
        </div>
        <div class="col-md-4 mt-5">
     
         <div class="shadow-sm p-3 mb-5 bg-white rounded">
         <i class="bi bi-6-square-fill"></i>   Cuida tu sonrisa sin salir de casa.
         </div>
          </div>
    </div>

  </div>

</div>

<!-- footer -->
<div style="background-color: #fff;" >
<div class="container ">
     <div class="row ">
        <div class="col-md-5 mt-5 mb-5 me-2 rounded-bottom rounded-top " style="background-color: #646ee3;" >
            <p class="mt-4 " style="color:white ;  margin-right: 130px;">Tu sonrisa es nuestra prioridad, agenda tu cita en línea hoy</p>
            <div class="row">
                <div class="col-md-6 mb-3 mt-5">
                <a href="{{ route('login') }}" class="button" >Start</a>
                </div>
                <div class="col-md-6">
                <img src="{{ asset('img/img_odontologia/doctor.png') }}" class="img-fluid" alt="Descripción de la imagen">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-5 mb-5 me-2 rounded-bottom rounded-top" style="background-color: #efefef;" >
        <img src="{{ asset('img/img_odontologia/sonrisaa.png') }}" class="img-fluid" alt="Descripción de la imagen">
              
        <p class="mt-3">La sonrisa perfecta a solo un clic de distancia</p>
        </div>
        <div class="col-md-3 mt-5 mb-5 me-2 rounded-bottom rounded-top" style="background-color: #efefef;">
            <p class="mt-3">La odontología en línea más eficiente y confiable para cuidar de tu sonrisa</p>
            <img src="{{ asset('img/img_odontologia/webb.png') }}" class="img-fluid" alt="Descripción de la imagen">
              
        </div>
     </div>
     <div class="row">
        <p>@2023</p>
     </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
    var floatingImage = document.getElementById("floating-image");
var currentPosition = 0;
var goingUp = true;

setInterval(function() {
  if (goingUp) {
    currentPosition++;
    if (currentPosition >= 50) {
      goingUp = false;
    }
  } else {
    currentPosition--;
    if (currentPosition <= -50) {
      goingUp = true;
    }
  }
  floatingImage.style.top = currentPosition + "px";
}, 50);
</script>  
</body>

</html>
