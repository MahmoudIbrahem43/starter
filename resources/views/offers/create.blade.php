<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .error {
            color: #ae1c17;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>



</body>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{__('messages.Add your offer')}}

        </div>
        '
        @if(Session::has('saved'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('saved') }}
            </div>
        @endif

        <br>
        <form method="POST" action="{{route('offers.store')}}" enctype="multipart/form-data">
            @csrf
        @csrf
{{--        <input name="_token" value="{{csrf_token()}}">--}}



    <div class="form-group">

        <label for="exampleInputEmail1">offer name</label>
        <input type="text" class="form-control" name="name" placeholder="offer name">
        @error('name')
        <small class="form-text text-danger">{{$message}}</small>
        @enderror
    </div>



    <div class="form-group">
        <label for="exampleInputPassword1">offer price</label>
        <input type="text" class="form-control" name="price" placeholder="offer price">
        @error('price')
        <small class="form-text text-danger">{{$message}}</small>
        @enderror
    </div>


    <div class="form-group">
        <label for="exampleInputPassword1">offer detalies</label>
        <input type="text" class="form-control" name="detalies" placeholder="offer detalies">
        @error('detalies')
        <small class="form-text text-danger">{{$message}}</small>
        @enderror
        </div>


    <button type="submit" class="btn btn-primary">save</button>
    </form>

</html>
