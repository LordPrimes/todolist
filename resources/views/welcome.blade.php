<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
       <main class="article container">
        <div class="article-item d-flex flex-column col-lg-12">
          @foreach ($view as $item)
            <div class="article-list-items d-flex ">
                <span class="article-numbers col-lg-2">{{$item->id}}</span>
                <a class="article-link col-lg-10" href="">{{$item->title}}</a>
            </div>
          @endforeach
        </div>
       </main>
    </body>
<script src="{{asset('js/app.js')}}"></script>
</html>
