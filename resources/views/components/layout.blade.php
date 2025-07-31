<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
      @livewireStyles
  <body style="background-image: url('{{ asset('images/sfondo.jpg') }}'); 
             background-size: cover; background-repeat: no-repeat;">
    
  <x-navbar />
  
  <div class="min-vh-100">
    {{$slot}}
  </div>
  

    <x-footer />
     @livewireScripts
  </body>

</html>