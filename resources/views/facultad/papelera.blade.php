<x-plantilla>
    <div class="container my-4">
        <div class="card border-primary">
            <div class="card-header bg-primary">
                <h5 class="text-white">Facultades en papelera</h5>
            </div>

            <div class="card-body">

                @if ($respuesta = Session::get("success"))
                  <div class="alert alert-success">
                    <b>{{$respuesta}}</b>  
                  </div>  
                @endif
                @if ($response_delete = Session::get("success_delete_facultad"))
                    <div class="alert alert-success">
                        {{$response_delete}}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Facultad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($facultades as $facultad)
                          <tr>
                            <td>{{$loop->iteration}}</td> 
                            <td>{{$facultad->nombre_facultad}}</td>
                             
                            <td>
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                        <form action="{{route("facultad.activar",$facultad->id)}}" method="post">
                                            @csrf
                                            @method("PUT")
                                            <button class="btn btn-outline-primary btn-sm">
                                               Activar
                                            </button>
                                          </form>    
                                    </div>

                                    <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                        <form action="{{route("facultad.borrado",$facultad->id)}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-outline-danger btn-sm">
                                               Borrar
                                            </button>
                                          </form>    
                                    </div>
                                </div>

                            </td> 
                          </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 
 </x-plantilla>