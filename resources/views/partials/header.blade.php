<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0 bg-light flex align-items-stretch">
            <a class="navbar-brand" href="#">
                <img src="img/dc-logo.png" width="70" height="70" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="flex align-items-stretch collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @foreach (config('DC.header-button') as $k => $el)
                        <li class="nav-item
                        @if($k == 1)
                            active
                        @endif
                        ">
                            <a class="nav-link" href="{{ $el['href'] }}"> {{ $el['content'] }} </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</header>
