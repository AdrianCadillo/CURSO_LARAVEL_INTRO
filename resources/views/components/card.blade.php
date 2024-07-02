@props(['color'=>"plomo"])
@php
    if($color === 'azul')
    {
        $borderType = "border-primary";
    }
    else{
        if($color === "amarillo")
        {
            $borderType = "border-warning";
        }
        else{
            if($color === "rojo")
            {
                $borderType = "border-danger";
            }else{
                $borderType = "border-secondary";
            }
        }
    }
@endphp

<div {{$attributes->merge([
    "class" =>"card $borderType mb-2"
])}}>
 <div  {{$title_card->attributes->merge([
    "class" => "card-header"
 ])}}>
    <h4 class="text-white">{{isset($title_card) ? $title_card:'title card'}}</h4>
 </div>

 <div class="card-body">
    texto....
 </div>
</div>