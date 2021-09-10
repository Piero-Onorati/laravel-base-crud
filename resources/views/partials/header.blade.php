<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="container">

    {{-- LOGO --}}
    <a class="navbar-brand" href="#">
      <img src={{asset('img/dc-logo.png')}} alt="logo" width="40">
    </a>
    {{-- Button Toggle --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- NAV --}}
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
        <a class="nav-link" href="{{route('comics.create')}}">Add Comic</a>
      </div>
    </div>
    
  </div>

</nav>