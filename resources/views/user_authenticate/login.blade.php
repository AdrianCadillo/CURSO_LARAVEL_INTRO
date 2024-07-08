<x-plantilla>
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-5 col-lg-6 col-12">
            <x-card color="rojo">
                <x-slot name="title_card" class="bg bg-danger">Login</x-slot>
                  <form action="" method="post">
                    <input type="email" class="form-control mb-2" name="email" placeholder="Email....">
                    <input type="password" class="form-control" name="password" placeholder="password....">  
                  </form>            
                <x-slot name="footer_card">
                  <x-button tipo="azul">Entrar</x-button>
                </x-slot>
             </x-card>
        </div>
      </div>
</x-plantilla>