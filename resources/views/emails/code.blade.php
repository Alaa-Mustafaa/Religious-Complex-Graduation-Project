<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Religious Complex</title>
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}" />

</head>

<body>

    <div class="container text-center">
        <p class="text-primary">The best place to visit</p>
        <h1>{{$data['title']}} </h1>
        <h2 class="text-primary"> {{$data['title']}}</h2>
        <p class="text-muted">{{$data['body']}}</p><span>{{$data['code']}}</span>
    </div>


</body>

</html>