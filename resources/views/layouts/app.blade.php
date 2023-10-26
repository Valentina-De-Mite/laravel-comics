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
        <div class="container py-3">
            <div class="d-flex justify-content-center ">

                <div>
                    <img src="{{Vite::asset('resources/images/dc-logo.png')}}" class="w-50" srcset="">
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


                <form class="d-flex" role="search">
                    <input class="form-control  border border-0 border-bottom border border-primary text-end" type="search" placeholder="Search" aria-label="Search"> 
                    <svg class="align-self-center" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                    
                </form>
            </div>
        </div>
       



    

    </header>




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