<header class="app-header">
    <a class="app-header__logo">Projeto</a>
    <a class="app-sidebar__toggle" href="url('home')" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <div class="app-nav">
        {{-- <a href="{{ Auth::check() ? url('/usuario/alterar', Auth::user()->id) : '' }}">
    <p style="float:right; padding-top: 15px; padding-right: 40px; color: rgb(255, 255, 255) " >Usuário: {{ Auth::check() ? Auth::user()->name : '' }}</p>
    </a> --}}
        <a style="float:right; padding-top: 15px; color: #212529; text-decoration: none;"
            href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-lg"></i>Logout</a>
    </div>
</header>
