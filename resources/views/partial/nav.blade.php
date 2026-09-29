 <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WEB TI</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home' ? 'active' : '') }}" aria-current="page"
          href="/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Berita' ? 'active' : '') }}" aria-current="page" href="/berita">berita</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Profile' ? 'active' : '') }}" aria-current="page" href="/profile">profile</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Contact' ? 'active' : '') }}" aria-current="page" href="/contact">contact</a>
        </li>

      </ul>
    </div>
  </div>
</nav>