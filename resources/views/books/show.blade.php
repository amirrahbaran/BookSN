<!doctype html>
<html lang="en">
<head>
    <style>
        span {
            font-weight:bold;
            text-transform:uppercase;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$book->name}} details</title>
</head>
<body>
    <h1>
        {{$book->name}} details
    </h1>
    <ul>
        <li><span>pages:</span> {{$book->pages}}</li>
        <li><span>isbn:</span> {{$book->isbn}}</li>
        <li><span>price:</span> {{$book->price}}</li>
        <li><span>published at:</span> {{$book->published_at}}</li>
    </ul>

    <div>
        <a href="/">Return to index</a>
    </div>
</body>
</html>