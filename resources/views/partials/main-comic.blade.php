<section class="for-main">
    <div class="bg-white">
        <main class="fw-bold">
            <div class="bg-blue-DC">
                <div class="container relative">
                    <a class="block decoration-none-H border border-white t-center absolute left white gray-1-H bg-azure-DC pointer scale-H transition-transform duration-2" href="{{route('comics')}}">
                        <div>
                            <img src="{{ asset($comic['thumb']) }}" alt="{{ $comic['title'] }}">
                        </div>
                        VIEW GALLERY
                    </a>
                </div>
            </div>
            <div class="container py-20">
                <div class="d-flex gap-45">
                    <div>
                        <h1 class="bold uppercase azure-9">{{ $comic['title'] }}</h1>
                        <div class="price d-flex between">
                            <button class="grow flex between i-center p-3 bg-transparent t-left border-DC-price">
                                <p class="green-1 grow m-0">U.S. Price: <strong
                                        class="white">{{ $comic['price'] }}</strong></p>
                                <div class="green-1">AVAILABLE</div>
                            </button>
                            <div class="p-3">
                                <select class="white bold pointer">
                                    <option><strong>Check Availability</strong></option>
                                </select>
                            </div>
                        </div>
                        <p class="gray-7 mt-6">{{ $comic['description'] }}</p>
                    </div>
                    <div>
                        <div class="text-right font-weight-bold">ADVERTISMENT</div>
                        <img src="{{ asset('./img/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="bg-gray-DC py-8">
                <div class="flex between container gap-50">
                    <table class="f-col-6">
                        <thead>
                            <tr class="border-b border-b-gray-2">
                                <th class="azure-9">Talent</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-b-gray-2">
                                <td class="azure-8 w-30">Art by:</td>
                                <td class="text-primary">
                                    @foreach ($comic['artists'] as $artist)
                                        {{ $artist . ', ' }}
                                        @if ($loop->last)
                                            {{ $artist }}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>

                            <tr class="border-b border-b-gray-2">
                                <td class="azure-8">Written by:</td>
                                <td class="text-primary">
                                    @foreach ($comic['writers'] as $artist)
                                        {{ $artist . ', ' }}
                                        @if ($loop->last)
                                            {{ $artist }}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="f-col-6">
                        <thead>
                            <tr class="border-b border-b-gray-2">
                                <th class="azure-9">Specs</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-b-gray-2">
                                <td class="azure-8">Series:</td>
                                <td class="gray-7">{{ strtoupper($comic['series']) }}</td>
                            </tr>

                            <tr class="border-b border-b-gray-2">
                                <td class="azure-8">U.S. Price:</td>
                                <td class="gray-7">{{ $comic['price'] }}</td>
                            </tr>

                            <tr class="border-b border-b-gray-2">
                                <td class="azure-8">On Sale Date:</td>
                                <td class="gray-7">{{ $comic['sale_date'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</section>
