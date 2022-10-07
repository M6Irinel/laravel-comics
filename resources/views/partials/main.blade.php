<section>
    <div class="bg">
        <main class="text-white fw-bold py-4 container">
            <button class="but px-3 py-1">CURRENT SERIES</button>
            <div class="row my-3">
                @foreach (config('comics') as $el)
                    <div class="col-6 col-md-3 col-lg-2 pt-4">
                        <div class="img-card">
                            <img class="img-fluid" src="{{ $el['thumb'] }}" alt="{{ $el['series'] }}"
                                title="{{ $el['type'] }}">
                        </div>
                        <p class="title pt-3">{{ $el['series'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="contenitor-but">
                <button class="but2 px-5 py-2">LOAD MORE</button>
            </div>
        </main>
    </div>
</section>
