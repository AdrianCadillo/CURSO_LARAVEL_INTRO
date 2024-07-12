<x-plantilla>
    <div class="container my-2">
        <h1>Bienvenido al sistema!</h1>
        <br>
        <h2>{{auth()->user()->name ."   ".auth()->user()->email}}</h2>
    </div>
</x-plantilla>