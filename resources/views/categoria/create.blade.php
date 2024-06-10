<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear categorías</title>
</head>
<body>
   <h1>Crear categorías</h1>  

   <form action="{{route("variosverbos")}}" method="post">
    @csrf
    
     <input type="text" name="nombres" placeholder="Nombres">
     <br>
     <button>Registrar</button>
   </form>
</body>
</html>