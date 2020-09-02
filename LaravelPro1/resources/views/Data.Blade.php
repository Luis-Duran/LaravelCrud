<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($names as $nomb)
        <h3>{{$nomb}}</h3>
    @endforeach
</body>
</html>