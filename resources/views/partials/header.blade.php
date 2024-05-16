<header class="mb-5">



    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top ">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

              <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
              <a class="nav-link {{Route::currentRouteName() === 'contatti' ? 'active' : ''}}" href="{{ route('contatti') }}">Contatti</a>
              <a class="nav-link {{Route::currentRouteName() === 'nuovapagina' ? 'active' : ''}}" href="{{ route('comics.index') }}">Comics</a>
              <a class="nav-link {{Route::currentRouteName() === 'comics.create' ? 'active' : ''}}" href="{{ route('comics.create') }}">New Comics</a>

            </div>
          </div>
        </div>
      </nav>



</header>
