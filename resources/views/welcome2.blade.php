<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Youtube & Mysql</title>

        <!-- Fonts -->
         <link rel="stylesheet" href="{{ asset('app.css') }}"> 
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       
    </head>
<body>
   @if (session('mensaje'))
       <div class="alert alert-success">             
            {{ session('mensaje') }}
        </div>
    @endif
<div class="content">
    <div class="m-b-md">
        <small class="title">My's Videos</small><br> <small class="title-2" >'Youtube & Mysql'</small>
    </div>

     
    <div class="container-2">
    <!-- <div style="display:flex;">
        @foreach($videos as $video)
               <div style="width: 20%;">
                 <iframe src="{{ $video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 <small>{{$video->nombre}}</small>
                </div>
                &nbsp;&nbsp;&nbsp;
        @endforeach

    </div> -->

        @foreach($videos as $video)
               <div class="item">
                 <iframe src="{{ $video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 <small>{{$video->nombre}}</small>
                </div>
        @endforeach

    </div>
    
       <div class="form-group">
                <form action="{{route('uploap')}}" method="post">
                     {{ csrf_field() }}
                            <div class="text-center display-5 text-primary">Inserte otro</div>
                            <input type="text" name="nombre" class=""  placeholder="¿que nombre quieres darle al video?">
                            <input type="url" name="url" class="" placeholder="pegue la url" >
                            <div>
                                <button type="submit" class="btn btn-success display-5">Añadir</button>
                            </div>
                </form>
       </div>
</div> 

<br><br><br>

</body>
</html>
