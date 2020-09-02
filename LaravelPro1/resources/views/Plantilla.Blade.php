<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <a class="btn btn-primary" data-toggle="collapse" href="{{Route ('Welcome')}}" role="button" aria-expanded="false" aria-controls="collapseExample">
        Link 1
    </a>
    
    <a class="btn btn-primary" data-toggle="collapse" href="{{Route ('Example')}}" role="button" aria-expanded="false" aria-controls="collapseExample">
        Link 2
    </a>

    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Link 3
    </a>
</body>
</html>