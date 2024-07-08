<x-plantilla>
    <div class="container my-4">
        <div class="card border-primary">
            <div class="card-header bg-primary">
                <h5 class="text-white">Formulario de contacto</h5>
            </div>

            <div class="card-body">
                @if ($response = Session::get("success"))
                    <div class="alert alert-success">{{$response}}</div>
                @endif
                <form action="{{route("contacto.enviar.correo")}}" method="post" id="form_contacto">
                    @csrf
                    <div class="form-group">
                        <label for="nombres">Nombres completos</label>
                        <input type="text" class="form-control" name="nombres" placeholder="Nombres....">
                    </div>

                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="text" class="form-control" name="email" placeholder="Email....">
                    </div>

                    <div class="form-group">
                        <label for="asunto">Asunto</label>
                        <textarea name="asunto" cols="30" rows="3" class="form-control"></textarea>
                    </div>

                </form>
            </div>

            <div class="card-footer">
                <button class="btn btn-success" onclick="document.getElementById('form_contacto').submit()">Enviar correo</button>
            </div>

        </div>
    </div>
</x-plantilla>