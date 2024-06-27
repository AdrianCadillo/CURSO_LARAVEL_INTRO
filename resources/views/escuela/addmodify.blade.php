<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config("app.name")}} - Escuelas</title>
    @vite(["resources/css/app.css"])
</head>
<body>
    <div class="my-4 container">
        <div class="card border-primary">
            <div class="card-header bg bg-primary">
                <h4 class="text-white">{{isset($escuela)?"Editar escuela":"Crear escuela"}}</h4>
            </div>

            <div class="card-body">
               <form action="{{!isset($escuela)?route("escuela.save"):route("escuela.modificar",$escuela)}}" method="post" id="form_escuela">
                 @csrf
                 @isset($escuela)
                    @method("PUT") 
                 @endisset
                 <input type="text" name="nombre_escuela" class="form-control mb-2"
                 placeholder="Escriba aquí...." value="{{isset($escuela)?$escuela->nombre_escuela:''}}">
                 <select name="facultad_id" class="form-select">
                     @isset($facultades)
                        @foreach ($facultades as $facultad)
                            <option value="{{$facultad->id}}" @selected($facultad->id === $escuela->facultad_id)>{{$facultad->nombre_facultad}}</option>
                        @endforeach 
                     @endisset
                 </select>
               </form>
            </div>

            <div class="card-footer">
                <button class="btn btn-success" onclick="document.getElementById('form_escuela').submit()">Guardar escuela</button>
            </div>
        </div>
    </div>
</body>
</html>