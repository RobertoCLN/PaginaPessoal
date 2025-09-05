  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="{{ asset('assets/img/my-profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="/" class="logo d-flex align-items-center justify-content-center">
      <h1 class="sitename">Roberto Cabral</h1>
    </a>

    <x-redes-sociais :links="$linksRedes" />

    <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"><i class="bi bi-house navicon"></i> Home</a></li>
        <li><a href="{{ route('sobre') }}" class="{{ request()->routeIs('sobre') ? 'active' : '' }}"><i class="bi bi-person navicon"></i> Sobre</a></li>
        <li><a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="{{ route('contato') }}" class="{{ request()->routeIs('contato') ? 'active' : '' }}"><i class="bi bi-envelope navicon"></i> Contato</a></li>
    </ul>
</nav>

  </header>