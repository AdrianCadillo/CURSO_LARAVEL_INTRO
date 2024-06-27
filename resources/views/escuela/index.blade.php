<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escuela</title>
    @vite(["resources/css/app.css"])
    </head>

<body>
    <div class="container my-4">
        <div class="card border-primary">
            <div class="card-header bg-primary">
                <h5 class="text-white">Todas las escuelas</h5>
            </div>

            <div class="card-body">

               @if ($respuesta = Session::get("success"))
                  <div class="alert alert-success">
                    <b>{{$respuesta}}</b>  
                  </div>  
                @endif
                <a href="{{route("escuela.create")}}" class="btn btn-primary mb-3">Agregar uno nuevo <i class="fas fa-plus"></i></a>
                @if ($response_delete = Session::get("success_delete_escuela"))
                    <div class="alert alert-success">
                        {{$response_delete}}
                    </div>
                @endif
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Escuela</th>
                            <th>Facultad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($escuelas as $key=>$escuela)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$escuela->nombre_escuela}}</td>
                            <td>{{$escuela->nombre_facultad}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                      <a href="{{route("escuela.editar",$escuela)}}" class="btn btn-warning btn-sm">editar</a>
                                    </div>

                                    <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                       <form action="" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger btn-sm">delete</button>
                                       </form>
                                    </div>
                                </div>
                            </td>
                          </tr>  
                        @empty
                            
                        @endforelse 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>