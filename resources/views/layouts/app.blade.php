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
       
       

      


    </main>




    @include('partial.footer')
</body>

</html>