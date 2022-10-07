<header>
    <div class="container">
        <div class="navbar flex align-items-lg-stretch p-0">
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="./img/dc-logo.png" width="70" height="70" alt="">
                </a>
            </nav>

            <div target="nav-collapse navbar-toggle"></div>

            <div class="collapse flex align-items-stretch h-auto" id="nav-collapse">
                <div class="navbar-nav ms-auto fw-bold">
                    @foreach (config('DC.header-button') as $el)
                        <div class="nav-item"> {{ $el['content'] }} </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</header>
