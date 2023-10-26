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
    @include('partial.header')



    <main class="bg-light">
       @yield('content') 
       
       

       <div class="jumbotron py-5"></div>


    <div class="black">
       <div class="container series py-5 text-center">
           <div class="blue popup py-1 px-3 fw-medium text-center text-light fs-4">
                CURRENT SERIES
            </div>
                <!-- <div class="row-cols-sm-6 row">
                    
                </div> -->

                <button class="btn btn-primary py-2 px-5 fs-5 mt-4 fw-medium">
                    LOAD MORE
                </button>
        </div>
                    

            <div class="blue fs-4 text-light py-3">
                <div class="container row m-auto justify-content-between align-items-center">
                </div>
                

            </div>                          
    </div>
        



    </main>




    <footer>
    <div class="banner text-light py-5">
    <div class="container row justify-content-center m-auto">
      <div class="col-6 d-flex">
        <div class="col-4 f-s d-flex flex-column">
          <h5 class="link pb-1">DC COMICS</h5>
          <a class="text-decoration-none link pb-3">Characters</a>
          <a class="text-decoration-none link pb-3">Comics</a>
          <a class="text-decoration-none link pb-3">Movies</a>
          <a class="text-decoration-none link pb-3">TV</a>
          <a class="text-decoration-none link pb-3">Games</a>
          <a class="text-decoration-none link pb-3">Videos</a>
          <a class="text-decoration-none link pb-5">News</a>
          <h5 class="pb-1 link">SHOP</h5>
          <a class="text-decoration-none link pb-3">Shop DC</a>
          <a class="text-decoration-none link pb-3">Shop DC Collectibles</a>
        </div>
        <div class="col-4 f-s d-flex flex-column">
          <h5 class="link pb-1">DC</h5>
          <a class="text-decoration-none link pb-3">Tearms Of Use</a>
          <a class="text-decoration-none link pb-3">Privacy policy (New)</a>
          <a class="text-decoration-none link pb-3">Ad Choices</a>
          <a class="text-decoration-none link pb-3">Advertising</a>
          <a class="text-decoration-none link pb-3">Jobs</a>
          <a class="text-decoration-none link pb-3">Subscriptions</a>
          <a class="text-decoration-none link pb-3">Talent Workshops</a>
          <a class="text-decoration-none link pb-3">CPSC Certificates</a>
          <a class="text-decoration-none link pb-3">Ratings</a>
          <a class="text-decoration-none link pb-3">Shop Help</a>
          <a class="text-decoration-none link pb-3">Contact Us</a>
        </div>
        <div class="col-4 f-s d-flex flex-column">
          <h5 class="link pb-1">SITES</h5>
          <a class="text-decoration-none link pb-3">DC</a>
          <a class="text-decoration-none link pb-3">MAD Megazine</a>
          <a class="text-decoration-none link pb-3">DC Kids</a>
          <a class="text-decoration-none link pb-3">DC Universe</a>
          <a class="text-decoration-none link pb-3">DC Power Visa</a>
        </div>
      </div>
      <div class="col-6 DC d-flex">
        <img
          class="w-150 ms-5"
          src="{{Vite::asset('resources/images/dc-logo-bg.png')}}"
          alt=""
          srcset=""
        />
      </div>
    </div>
  </div>
    <div class="footer text-light py-5 dark">
            <div class="container row justify-content-between m-auto">
                <div class="col-2">
                    <button class="btn btn-outline-primary py-2">SING UP NOW!</button>
                </div>
                <div class="col-4 d-flex align-items-end">
                    <h5 class="tb text-primary me-4">FOLLOW US</h5>
                    <img
                    class="me-2 icon"
                    src="{{Vite::asset('resources/images/footer-facebook.png')}}"
                    alt=""
                    srcset=""
                    />
                    <img
                    class="icon me-2"
                    src="{{Vite::asset('resources/images/footer-twitter.png')}}"
                    alt=""
                    srcset=""
                    />
                    <img
                    class="icon me-2"
                    src="{{Vite::asset('resources/images/footer-youtube.png')}}"
                    alt=""
                    srcset=""
                    />
                    <img
                    class="icon me-2"
                    src="{{Vite::asset('resources/images/footer-pinterest.png')}}"
                    alt=""
                    srcset=""
                    />
                    <img class="icon" src="{{Vite::asset('resources/images/footer-periscope.png')}}" />
                </div>
            </div>
    </div>

    </footer>
</body>

</html>