<!-- header section strats -->
<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ route('admin.index') }}">
                <span>
                    Hotel le lac
                </span>
            </a>
            <div class="" id="">

                <div class="custom_menu-btn">
                    <button onclick="openNav()">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                    </button>
                    <div id="myNav" class="overlay">
                        <div class="overlay-content">
                            <a href="{{ route('admin.index') }}">Accueil</a>
                            <a href="{{ route('admin.rooms.index') }}">Chambres</a>
                            <a href="{{ route('admin.bookings.index') }}">Réservations</a>
                            <a href="{{ route('admin.events.index') }}">Evènements</a>
                            <a href="{{ route('admin.comments.index') }}">Commentaires</a>
                            <a href="{{ route('dashboard') }}">Profile</a>
                            <a href="{{ route('dashboard') }}">Se Déconnecter</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- end header section -->
