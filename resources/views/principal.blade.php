<html>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class ="container">
            <div class="row">
        <!--<a class="navbar-brand" href="#">The Nail appeal</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li>
              <img src="{{asset('/images/logo nail.png')}}" class="img-fluid" width="50px">
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/catalogo') }}">Catálogo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contacto') }}">Contacto</a>
            </li>
            <li><div class="relative flex items-top justify-right min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
              @if (Route::has('login'))
                  <!--<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">-->
                      @auth
                          <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">{{ Auth::user()->name }}</a>
                      @else
                          <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
        
                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrar</a>
                          @endif
                      @endif
                  </div>
              @endif
            </li>
          </ul>
        </div>
      </nav>
    </div>
</div> 
<header class="container-fluid" style="height: 400px; background-color:#5CD">
  <div class="row">
    <div class="col-6 align-content-center text-justify">
        <h1 text-align="center">Bienvenida a the nail appeal</h1>
        <p text-justify> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit illum reprehenderit ex libero odit? Dolorem corporis itaque voluptas recusandae officiis eligendi architecto, minus adipisci necessitatibus deleniti laboriosam assumenda nisi nihil.</p>
        <button type="button" class="btn btn-dark" text-align="center">Más</button>
    </div>
  </div>
  <div class="row">
  <!--<div class="col-6 align-content-center text-justify">
    <img class="mySlides" src="images/uñas.jpg"    width="1349px" height="300px">
    <img class="mySlides" src="images/logo.jpeg"        width="1349px" height="300px">
    <img class="mySlides" src="images/logo nail.png"      width="1349px" height="300px">
    <img class="mySlides" src="images/ecommerce1.jpg"   width="1349px" height="300px">
    <img class="mySlides" src="images/teclado.jpg"      width="1349px" height="300px">
    <script>
    var myIndex = 0;
    carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
        }
        myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
    }
    </script>-->
    </div>
</div>
  </header>   
<title> The Nail appeal </title>
<footer>
      <p> Conoce nuestras redes sociales </p>
      <nav class="row">
      <ul>
          <li ><a href="https://twitter.com/?lang=es" target="_blank"> <img src="https://lh6.googleusercontent.com/-vao9pzZoGtk/T6VYC4d1YMI/AAAAAAAAA0U/4rdP2chJido/s48/twitter48.png" width=30 height=30 alt="Síguenos en Twitter" /></a></li>
          <li><a href="https://www.facebook.com/" target="_blank"> <img alt="Siguenos en Facebook" src="https://lh3.googleusercontent.com/-NSLbC_ztNls/T6VX0g6z8AI/AAAAAAAAA0A/_vyIBrmZbuY/s48/facebook48.png" width=30 height=35  /></a></li>
          <li><a href="https://www.instagram.com/?hl=es-la" target="_blank"> <img alt="Siguenos en Blogger" src="https://lh3.googleusercontent.com/-D-erW-8vZFo/UIqE3H6oUuI/AAAAAAAABgE/4kh346Lwaxk/s48/instagram48.png" width=30 height=35  /></a></li>
          <li><a href="https://www.youtube.com/" target="_blank"><img alt="Siguenos en YouTube" src="https://lh6.googleusercontent.com/-Atgpy-x_OwI/T6mYkA18hYI/AAAAAAAAA1U/qksUJ5uBq3c/s48/youtube48.png" width=30 height=35  /></a></li>
      </ul>
    </nav>
  <p> Derechos reservados The Nail appeal</p>
</footer>
</html>
