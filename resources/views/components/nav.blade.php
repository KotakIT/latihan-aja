<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item {{ request()->is('mahasiswa') ? 'active' : '' }}">
        <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
      </li>
      <li class="nav-item {{ request()->is('dosen') ? 'active' : '' }}">
        <a class="nav-link" href="/dosen">Dosen</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/dosen">Login</a>
      </li>
    </ul>
  </div>
</nav>