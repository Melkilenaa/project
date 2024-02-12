<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid flex items-center">
    <a class="navbar-brand" href="#">
      <img src="/img/logom.jpg" alt="Logo" width="50" height="40" class="inline-block align-text-top">
      <span class="ml-2 text-white">{{ config('app.name') }}</span>
    </a>
    <div class="flex">
      @if(auth()->check())
      <span class="text-white mx-2">{{ auth()->user()->name }}</span>
      <a href="{{ route('logout') }}" class="btn btn-danger mx-2">Logout</a>
      @else
      <a href="{{ route('login') }}" class="btn btn-primary mx-2">Login</a>
      <a href="{{ route('registration') }}" class="btn btn-success">Register</a>
      @endif
    </div>
  </div>
</nav>
