<nav class="navbar navbar-expand-lg  {{$Tipo}}">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{$slot}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          @auth
          <x-item href="{{route('facultad.index')}}">Facultades</x-item>  
          <x-item href="{{route('escuela.index')}}">Escuelas</x-item> 
          <x-item href="{{route('escuela.index')}}">logout</x-item> 
          @endauth
          
          @guest
          <x-item href="{{route('login')}}">login</x-item>  
          <x-item href="{{route('escuela.index')}}">Registrate</x-item> 
          @endguest
        </ul>
      </div>
    </div>
</nav>