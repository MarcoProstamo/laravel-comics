<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container py-3">
            <a class="navbar-brand" href={{ route("comics") }}>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" width="30" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('comics') ? 'active' : '' }}" href={{ route("comics") }}>Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('news') ? 'active' : '' }}" href={{ route("news") }}>News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('shop') ? 'active' : '' }}" href={{ route("shop") }}>Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('clown') ? 'active' : '' }}" href={{ route("clown") }}>Clown</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>