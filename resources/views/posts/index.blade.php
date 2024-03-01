<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <a href="{{url('posts/create')}}" class=" m-3 btn btn-success">Add New</a>
        <h1>Simple Blog TXT</h1>
        @foreach ($posts as $post)
        @php
            $post = explode(",", $post)
        @endphp
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post[1] ?? 'tidak ada data' }}</h5>
                <p class="card-text">{{ $post[2] ?? 'tidak ada data' }}</p>
                <p class="card-text">{{ $post[3] ?? 'tidak ada data' }}</p>
                <a href="{{url("posts/$post[0]")}}" class="btn btn-primary">Show</a>
            </div>
        </div>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>