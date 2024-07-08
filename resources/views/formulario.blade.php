<x-plantilla>
    @section('title_app','Validaciones Jquery')
    
    <x-card color="azul">
        <x-slot:title_card class="bg bg-primary">Formulario</x-slot:title_card>
       <form action="" method="POST">
         <input type="text" class="form-control mb-2" name="nombres" id="nombres"
         placeholder="Nombres....">
         <span class="text-danger mb-1" id="error_nombres"></span>
         <input type="text" class="form-control mb-2" name="apellidos" id="apellidos"
         placeholder="Apellidos....">
         <span class="text-danger mb-1" id="error_apellidos"></span>
         <input type="text" class="form-control" name="direccion" id="direccion"
         placeholder="Direccion...">
         <span class="text-danger mb-1" id="error_direccion"></span>
       </form>

       <x-slot:footer_card>
           <x-button tipo="verde" id="enviar">Enviar</x-button>
       </x-slot:footer_card>
    </x-card>

    @section('js')
        <script type="module">
            $(document).ready(function(){
               $('#enviar').click(function(){
                //   $.ajax({
                //     url:"/validate-jquery",
                //     method:"POST",
                //     data:{
                //      _token:"{{csrf_token()}}",
                //      nombres:$('#nombres').val(),
                //      apellidos:$('#apellidos').val(),
                //      direccion:$('#direccion').val()
                //     },
                //     dataType:"json",
                //     success:function(response){
                //        /// undfined
                        
                //        if(response.errors != undefined)
                //        {
                //          if(response.errors.apellidos != undefined)
                //          {
                //            $('#error_apellidos').text(response.errors.apellidos); 
                //          }else{
                //             $('#error_apellidos').text("");  
                //          }

                //          if(response.errors.nombres != undefined)
                //          {
                //            $('#error_nombres').text(response.errors.nombres); 
                //          }else{
                //             $('#error_nombres').text("");  
                //          }

                //          if(response.errors.direccion != undefined)
                //          {
                //            $('#error_direccion').text(response.errors.direccion); 
                //          }else{
                //             $('#error_direccion').text("");  
                //          }
                //        }else{
                //         alert("no existe er")
                //        }
                //     }                  
                //   });
               let FormDataPersona = new FormData();
                FormDataPersona.append("_token","{{csrf_token()}}");
                FormDataPersona.append("apellidos",$('#apellidos').val());
                
                FormDataPersona.append("nombres",$('#nombres').val());
                FormDataPersona.append("direccion",$('#direccion').val());
                
                axios({
                method: 'post',
                url: '/validate-jquery',
                data: FormDataPersona,
                }).then(function(response){
                   
                    
                });

               }); 
            });

        </script>
    @endsection
</x-plantilla>