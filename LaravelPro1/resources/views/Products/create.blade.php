<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
         <input type="text" name="nombre" >
         <input type="number" name="precio">
         <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
         <input type="number" name="cantidad">

         <button>Registrar</button>
    </form>
    
</body>
</html>