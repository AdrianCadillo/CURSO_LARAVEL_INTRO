@props(['tipo'=>"plomo"])

@php
    switch ($tipo) {
        case 'verde':
             $tipoButon = "btn-success";
        break;
        case 'amarillo':
             $tipoButon = "btn-warning";
        break;

        case 'rojo':
             $tipoButon = "btn-danger";
        break;
        case 'azul':
             $tipoButon = "btn-primary";
        break;
        
        default:
        $tipoButon = "btn-secondary";  
        break;
    }
@endphp

<button {{$attributes->merge([
    "class"=>"btn $tipoButon"
])}}>{{$slot}}</button>