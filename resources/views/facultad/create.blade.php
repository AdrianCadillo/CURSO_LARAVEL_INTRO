<x-plantilla>
    
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
</x-plantilla>
 