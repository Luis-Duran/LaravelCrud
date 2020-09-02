<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('products.update',$product->id)}}" method="POST">
        @csrf
        @method('patch')
         <input type="text" name="nombre" value="{{$product->nombre}}" >
         <input type="number" name="precio" value="{{$product->precio}}">
         <textarea name="descripcion" id="" cols="30" rows="10" >
         {{$product->descripcion}}
         </textarea>
         <input type="number" name="cantidad" value="{{$product->cantidad}}">

         <button>Editar</button>
    </form>
    
</body>
</html>