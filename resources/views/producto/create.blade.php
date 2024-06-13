<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto-crear</title>
</head>
<body>
     <form action="{{route("producto.delete",["id"=>2])}}" method="post">
        @method("DELETE")
        @csrf
        <input type="text" name="email" placeholder="email--..">
        <br>
        <input type="text" name="name" placeholder="Nombres....">
        <br>
        <button>Enviar</button>
     </form>
</body>
</html>