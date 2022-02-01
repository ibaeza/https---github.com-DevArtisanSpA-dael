<nav class="navbar navbar-expand-lg navbar-dark bg-light2 ">
  <div class="container-fluid" style="background-color: rgb(0, 129, 180);">
    <router-link class="navbar-brand" to="/">My Project</router-link>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
            <router-link to="/" class="text-white">Home</router-link>
        </li>

      </ul>
      


      <ul class="navbar-nav">

          <li class="navbar-nav">

              <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              
                  Perfil
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Perfil</a></li>
                  <li><hr class="dropdown-divider"></li>
              </ul>
          </li>
      </ul>

    </div>
  </div>
</nav>