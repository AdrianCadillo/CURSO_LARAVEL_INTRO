<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facultades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                <h5>{{isset($facultad) ? "Editar facultad":"Crear Facultad"}}</h5>
            </div>

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{isset($facultad)?route("facultad.modificar",$facultad):route("facultad.save")}}" method="post" id="formulario_facultad">
                    @csrf
                    @isset($facultad)
                        @method("PUT")
                    @endisset
                    <input type="text" name="nombre_facultad" class="form-control" placeholder="Escriba nombre de la facultad....."
                    value="{{isset($facultad) ? $facultad->nombre_facultad:''}}">
                </form>

            </div>
            <div class="card-footer">
                <button class="btn btn-primary" onclick="document.getElementById('formulario_facultad').submit()">Guardar</button>
            </div>
        </div>
    </div>
</body>

</html>