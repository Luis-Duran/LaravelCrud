<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mostrando producto</h1>
    <p>{{$product->nombre}}</p>
    <p>{{$product->descripcion}}</p>
    <p>{{$product->precio}}</p>
    <p>{{$product->cantidad}}</p>
    <a href="{{route('products.edit',$product->id)}}">Editar</a>
    <form action="{{route('products.destroy',$product->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Eliminar</button>
    </form>

</body>
</html>