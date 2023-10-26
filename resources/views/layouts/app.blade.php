<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Comics @yield('page-title') </title>

   

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header id="site_header">
    <div class="container f-xs py-3">
    <div class="d-flex justify-content-center">
      
        <div>
            <img src="{{Vite::asset('resources/images/dc-logo.png')}}" class="w-25" srcset="">
        </div>
        
        <a class="navitem" href="#" aria-current="page"
          >CHARACTERS</a
        >
        <a class="navitem" href="#">COMICS</a>
        <a class="navitem" href="#">MOVIES</a>
        <a class="navitem" href="#">TV</a>
        <a class="navitem" href="#">COLLECTIBLES</a>
        <a class="navitem" href="#">VIDEOS</a>
        <a class="navitem" href="#">FANS</a>
        <a class="navitem" href="#">NEWS</a>
        <a class="navitem" href="#">SHOP</a>
      
    </div>
  </div>



    

    </header>




    <main class="bg-light">
       @yield('content') 
    </main>




    <footer>
    <div class="footer text-light py-5 dark">
    <div class="container row justify-content-between m-auto">
      <div class="col-2">
        <button class="btn btn-outline-primary py-2">SING UP NOW!</button>
      </div>
      <div class="col-4 d-flex align-items-end">
        <h5 class="tb text-primary me-4">FOLLOW US</h5>
        <img
          class="me-2 icon"
          src="../assets/img/footer-facebook.png"
          alt=""
          srcset=""
        />
        <img
          class="icon me-2"
          src="../assets/img/footer-twitter.png"
          alt=""
          srcset=""
        />
        <img
          class="icon me-2"
          src="../assets/img/footer-youtube.png"
          alt=""
          srcset=""
        />
        <img
          class="icon me-2"
          src="../assets/img/footer-pinterest.png"
          alt=""
          srcset=""
        />
        <img class="icon" src="../assets/img/footer-periscope.png" alt="" />
      </div>
    </div>
  </div>

    </footer>
</body>

</html>