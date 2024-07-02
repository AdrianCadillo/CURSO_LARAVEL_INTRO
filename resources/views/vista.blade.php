<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Componentes</title>
    @vite(["resources/css/app.css"])
</head>
<body class="container my-2">
    {{-- <x-button tipo="verde" class="border-danger">Guardar</x-button>
    <x-button tipo="amarillo">Editar</x-button>
    <x-button tipo="rojo">Eliminar</x-button>
    <x-button tipo="azul">Listar</x-button>

    <br>

    <x-card  color="azul">
      <x-slot:title_card class="bg bg-primary">Listado de Categorías</x-slot:title_card>    
    </x-card> <!-- sea color azul-->
    <x-card color="amarillo" >
        <x-slot:title_card class="bg bg-warning">Crear Categorías</x-slot:title_card>      
    </x-card> <!--- sea color amarillo-->
    <x-card color="rojo">
        <x-slot:title_card class="bg bg-danger">Eliminar categorías</x-slot:title_card>      
    </x-card> <!--- sea de color rojo --->

    <x-card>
        <x-slot:title_card class="bg bg-warning">Crear Categorías</x-slot:title_card>      
    </x-card> --}}

    <x-admin.alerta tipo="success"></x-admin.alerta>
    <x-admin.alerta tipo="error"></x-admin.alerta>

    <x-admin.alerta></x-admin.alerta>
</body>
</html>