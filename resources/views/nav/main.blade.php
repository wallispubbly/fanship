<style>

</style>

<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
      </a>
  
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
  
      <div class="navbar-end">
        <div class="navbar-item">
          

            @guest
            <div class="buttons">
                <a class="button is-primary">
                <strong>Sign up</strong>
                </a>
                <a class="button is-light">
                    Log in
                </a>
            </div>
            @endguest

            @auth
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                 Hi, {{ auth()->user()->name }}
                </a>

                <div class="navbar-dropdown is-right">
                <a href="/users/{{ auth()->user()->id }}" class="navbar-item">
                    My Profile
                </a>
                <hr class="navbar-divider">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                     Log out
                </a>
                
                </div>
            </div>
            @endauth

            {{-- Hidden logout form --}}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

          </div>
        </div>
      </div>
    </div>
  </nav>

<script>

</script>