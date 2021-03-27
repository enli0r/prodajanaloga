<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">prodaja naloga</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('posts')}}">Posts</a>
        </li>

          @auth

            <li class="nav-item">
              <a class="nav-link" href="{{route('posts.create')}}">Create post</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">{{Auth::user()->username}}</a>
            </li>
            
            <form action="{{route('logout')}}" method="POST" class="logoutForm">
                @csrf
                <button type="submit" class="btn nav-link" id="logout">Logout</button>
            </form>

            


          @endauth
          
          @guest
            <li class="nav-item">
              <a class="nav-link" id="login" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="register" href="{{route('register')}}">Register</a>
            </li>
          @endguest

        </ul>
      </div>
    </div>
</nav>
