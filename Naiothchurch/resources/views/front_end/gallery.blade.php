@extends('front_end.body.links')

{{--Extends the contents from the links.blade.php file --}}

@section('main')

    @section('title')
        Naioth in Ramah | Categories
    @endsection

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Freebie: 4 Bootstrap Gallery Templates </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
        <link rel="stylesheet" href="{{asset('/freebie-4-bootstrap-gallery-templates/grid/gallery-grid.css')}}">
    </head>

    <body>
        @php
            $route = Route::current()->getName();
        @endphp

        <div class="container gallery-container">
            @foreach ($category as $catego)
                <h1>{{ $catego->name }}</h1>
            @endforeach

            <div class="tz-gallery">
                @foreach ($category as $categor)
                    @foreach ($categor->galleries as $gallery)
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="{{asset($gallery->images)}}">
                                <img src="{{asset($gallery->images)}}" alt="Park">
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

            <script>
                baguetteBox.run('.tz-gallery');
            </script>
        </div>
    </body>
</html>
