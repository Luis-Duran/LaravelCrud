<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Lista</h1>
    <a href="{{route('products.create')}}">Agregar</a>
    @foreach($products as $product)
        <div style = "border: 2px solid red;">
            <p>{{$product->nombre}}</p>
            <p>{{$product->precio}}</p>
            <p>{{$product->cantidad}}</p>
            <p>{{$product->descripcion}}</p>
            <a href="{{route('products.show',$product->id)}}">Mostrar</a>
        </div>
    @endforeach
</body>
</html>