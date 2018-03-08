<header id="header">
  
  <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="{{URL::to('/')}}">Master Mind</a>

  <div class="container">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/')}}">Home</a>
      </li>

      @if(Auth::user()->role()->first()->name=="Admin")
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/users')}}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/stats')}}">Stats</a>
        </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/rules')}}">Rules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/about')}}">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{Auth::user()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Activity</a>
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="{{URL::to('/logout')}}">Sign Out</a>
          <!-- <div class="dropdown-divider"></div> -->
        </div>
      </li>
    </ul>
    
  </div>
</nav>
   
</header>