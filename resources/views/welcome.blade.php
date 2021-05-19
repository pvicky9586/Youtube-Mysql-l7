@extends('app')
@section('content')    

   @if (session('mensaje'))
       <div class="alert alert-success">             
            {{ session('mensaje') }}
        </div>
    @endif

    <div class="container-2">
        @foreach($videos as $video)
               <div class="item">
                 <iframe src="{{ $video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 <small>{{$video->nombre}}</small>
                </div>
        @endforeach
    </div>
    
       <div>
                <form action="{{route('uploap')}}" method="post">
                     {{ csrf_field() }}
                            <div class="text-center display-5 text-primary">Inserte otro</div>
                            <input type="text" name="nombre" class=""  placeholder="¿que nombre quieres darle al video?">
                            <input type="url" name="url" class="" placeholder="pegue la url" ><br>
                            
                                <button type="submit" class="btn btn-success display-5">Añadir</button>
                           
                </form>
       </div>

<br><br><br>
@endsection
