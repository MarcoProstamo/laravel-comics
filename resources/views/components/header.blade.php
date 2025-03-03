<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href={{ route("comics") }}>Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href={{ route("comics") }}>Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route("news") }}>News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route("shop") }}>Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route("clown") }}>Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>