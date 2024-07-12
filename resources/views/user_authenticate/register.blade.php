<x-plantilla>
    <div class="container my-2">
        <x-card color="azul" >
          <x-slot name="title_card" class="bg bg-primary">Registrate</x-slot>
          <form action="{{route("user.store")}}" method="post" id="form_user_save">
            @csrf
            <input type="text" name="name" class="form-control" placeholder="Nombres....">
            <input type="text" name="email" class="form-control" placeholder="Email....">
            <input type="password" name="password" class="form-control" placeholder="Password...">
        </form>
        <x-slot name="footer_card">
             <x-button tipo="azul" onclick="document.getElementById('form_user_save').submit()">Guardar</x-button>
        </x-slot>
        </x-card>
    </div>
</x-plantilla>