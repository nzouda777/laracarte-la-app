<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('root_path')}}"> {{ config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse  navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item  ml-2 ">
            <a class="nav-link {{ set_active_route('root_path') }}" aria-current="page" href="{{ route('root_path')}}">Home</a>
          </li>
          <li class="nav-item ml-4 ">
            <a class="nav-link {{ set_active_route('about_path') }} " href="{{route('about_path')}}">About</a>
          </li>
          <li class="nav-item  ml-4">
            <a href="#" class="nav-link">Artisans</a>
          </li>
          <li class="nav-item  ml-4 dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Planet
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Laravel.com</a></li>
              <li><a class="dropdown-item" href="#">Laravel.io</a></li>
              <li>
                <a href="#" class="dropdown-item">Laracasts</a>
              </li>
              <li>
                <a href="#" class="dropdown-item">Laravel jobs</a>
              </li>
              <li>
                <a href="#" class="dropdown-item">Laravel News</a>
              </li>
              <li>
                <a href="#" class="dropdown-item">Larachat</a>
              </li>
            </ul>
          </li>
          <li class="nav-item  ml-4">
            <a class="nav-link ">Contact</a>
          </li>
        </ul>
        <ul class="nav navbar-nav  navbar-right">
            <li class="nav-item ">
                <a href="#" class="nav-link">Login</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link">Register</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
