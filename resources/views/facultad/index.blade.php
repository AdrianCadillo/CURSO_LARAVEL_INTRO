<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facultades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

<body>
    <div class="container my-4">
        <div class="card border-primary">
            <div class="card-header bg-primary">
                <h5 class="text-white">Todas las facultades</h5>
            </div>

            <div class="card-body">

                @if ($respuesta = Session::get("success"))
                  <div class="alert alert-success">
                    <b>{{$respuesta}}</b>  
                  </div>  
                @endif
                <a href="{{route("facultad.create")}}" class="btn btn-primary mb-3">Agregar uno nuevo <i class="fas fa-plus"></i></a>
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
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($facultades as $facultad)
                          <tr>
                            <td>{{$loop->iteration}}</td> 
                            <td>{{$facultad->nombre_facultad}}</td>
                            <td>
                                @if ($facultad->estado === 'habilitado')
                                    <span class="badge bg-success">
                                      facultad habilitado
                                    </span>
                                    @else 
                                    <span class="badge bg-danger">
                                        facultad inhabilitado
                                    </span>
                                @endif
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                        <a href="{{route("facultad.editar",$facultad)}}" class="btn btn-outline-warning btn-sm">
                                            <i class="fas fa-pencil"></i>  
                                        </a> 
                                    </div>

                                    <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                        <form action="{{route("facultad.delete",$facultad->id)}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-outline-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
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
</body>

</html>