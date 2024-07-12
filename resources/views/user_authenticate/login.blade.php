<x-plantilla>
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-5 col-lg-6 col-12">
            <x-card color="rojo">
                <x-slot name="title_card" class="bg bg-danger">Login</x-slot>
                  <form action="{{route("login-signin")}}" method="post" id="form_login">
                    @csrf
                    <input type="email" class="form-control mb-2" name="email" placeholder="Email....">
                    <input type="password" class="form-control" name="password" placeholder="password....">  
                     <br>
                     <label for="remember">
                      Recordar mi sesión
                      <input type="checkbox" name="remember" id="remember">
                     </label>
                  </form>            
                <x-slot name="footer_card">
                  <x-button tipo="azul" onclick="document.getElementById('form_login').submit()">Entrar</x-button>
                </x-slot>
             </x-card>
        </div>
      </div>
</x-plantilla>