<nav class="navbar navbar-expand-lg  {{$Tipo}}">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{$slot}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          @if (Auth::check())
          <x-item href="{{route('facultad.index')}}">Facultades</x-item>  
          <x-item href="{{route('escuela.index')}}">Escuelas</x-item> 
          <x-item href="javascript:;" onclick="document.getElementById('logout').submit()">logout</x-item> 
          <form action="{{route("login.logout")}}" method="post" id="logout">
            @csrf
          </form>
          @else 
          <x-item href="{{route('login')}}">login</x-item>  
          <x-item href="{{route('user.registrate')}}">Registrate</x-item> 
          @endif
 
        </ul>
      </div>
    </div>
</nav>