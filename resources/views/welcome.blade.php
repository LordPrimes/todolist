<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
       <main class="article container">
        <div class="article-item d-flex flex-column col-lg-12">
        <form method="POST" action="{{'create'}}">
            @csrf
            <input type="text" class="input-group" name="title">
            <input type="text" class="input-group" name="description">
            <input type="submit" class="btn btn-primary" value="Создать">
          </form>
     
          @foreach ($view as $item)
            <div class="article-list-items d-flex ">
                <span class="article-numbers col-lg-2">{{$item->id}}</span>
            <a class="article-link col-lg-10" href="{{route('items', $item->id)}}">{{$item->title}}</a>
            <form method="POST" action="{{route('delet', $item->id)}}">
                @csrf
                {{ method_field('DELETE')}}
                <input type="submit" class="btn btn-primary" value="Удалить">
              </form>
            </div>
          @endforeach
        </div>
        @yield('content')
       </main>
    </body>
<script src="{{asset('js/app.js')}}"></script>
</html>
