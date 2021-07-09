<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">KPN</a>
    
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link hoverUnderline" href="{{route('home')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link hoverUnderline" href="{{route('posts')}}">Posts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link hoverUnderline" href="{{route('posts.create')}}">Create post</a>
        </li>
      </ul>

      <ul class="navbar-nav mx-auto">
        <li class="nav-item social">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-instagram"></i>
          </a>
        </li>

        <li class="nav-item social">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-twitter"></i>
          </a>
        </li>

        <li class="nav-item social">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-facebook social"></i>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        @auth
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown07"  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Auth::user()->username}} <i class="fas fa-user"></i>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdown07">
              <form action="{{route('logout')}}" method="POST" class="logoutForm">
                @csrf
                <button type="submit" class="dropdown-item" id="logout">Logout</button>
              </form>

              <a href="#" class="dropdown-item">My posts</a>
            </div>
          </li>
        @endauth
        
        @guest
          <li class="nav-item">
            <a class="nav-link hoverUnderline" id="login" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="register" href="{{route('register')}}">Register</a>
          </li>
          @endguest
      </ul>        
    </div>
  </div>
</nav>