<nav class="navbar navbar-expand-lg bg-danger navbar-dark mb-5">
  <div class="container">
    <a class="navbar-brand" href="/">Laravel Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'home') ? 'active' :'' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'about') ? 'active' :'' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'posts') ? 'active' :'' }}" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'categories') ? 'active' :'' }}" href="/categories">Categories</a>
        </li>
      </ul>

      <ul class="navbar-nav">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Wellcome back, {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i
                  class="bi bi-layout-text-window-reverse me-1"></i>Dashboard</a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-1"></i>Logout</a></li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a href="/login" class="nav-link {{ ($active === 'login')? 'active' :'' }}"><i
              class="bi bi-box-arrow-in-right mx-1"></i>Login</a>
        </li>
        @endauth
      </ul>
      {{-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}
    </div>
  </div>
</nav>