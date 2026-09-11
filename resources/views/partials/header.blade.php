<nav class="navbar navbar-expand-lg navbar-light  shadow-lg rounded bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">WebsiteKita</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse   " id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto ">
               
                    <x-nav-item :href="route('home')" :active="request()->routeIs('home')">
                        Home
                    </x-nav-item>
                    <x-nav-item :href="route('about')" :active="request()->routeIs('about')">
                        About
                    </x-nav-item>
                
            </div>
        </div>
    </div>
</nav>