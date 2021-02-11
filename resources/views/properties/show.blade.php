{{-- @dd($property) --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if ($property->category_id)
                <a href="{{ route('categories.show', $property->category) }}"
                    class="badge badge-secondary mb-1"
                >
                    {{ $property->category->name }}
                </a>
            @endif
        </h2>
    </x-slot>
    <hr>
    <section class="bg-white py-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <div class="container mx-auto d-flex flex-wrap justify-content-between align-items-start flex inset-y-0 left-0 w-1/2"
        >
            <div class="col-12 col-sm-10 col-lg-8 mx-auto p-6">
                @if ($property->photos->count() === 1)
                    <img class="card-img-top"
                        src="{{ isset($property->photos->first()->url) ? $property->photos->first()->url : "/storage/images/properties/".$property->image }}"
                        alt="{{ $property->title }}"
                    >
                @elseif ($property->photos->count() > 1)
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                          <li data-target="#demo" data-slide-to="0" class="active"></li>
                          <li data-target="#demo" data-slide-to="1"></li>
                          <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            @foreach ($property->photos as $photo)
                                <div
                                height="500" --}}
                                    >
                                </div>
                            @endforeach
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                          <span class="carousel-control-prev-icon" style="background-color: #111827;"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                          <span class="carousel-control-next-icon" style="background-color: #111827;"></span>
                        </a>
                    </div>
                @else
                    <img class="max-h-full"
                        src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&q=80"
                        alt="{{ $property->title }}"
                    >
                @endif
                <div class="bg-white p-5 shadow rounded">
                    <h1 class="mb-0">{{ $property->category->name . " - " . $property->description }}</h1>
                    <hr>
                    <p class="text-secondary">
                        <strong>Description</strong> {{ $property->full_description }}
                    </p>
                    <hr>
                    <p class="text-secondary">
                        <strong>Address</strong> {{ $property->address }}
                    </p>
                    <hr>
                    <p class="text-secondary">
                        <strong>Price</strong> ${{ number_format($property->price) . " " . $property->currency->name }}
                    </p>
                    <hr>
                    <p class="text-secondary">
                        <strong>Expenses</strong> ${{ $property->expenses . " " . $property->currency->name }}
                    </p>
                    <hr>
                    <p class="text-secondary">
                        <strong>Environments</strong> {{ $property->environment }}
                    </p>
                    <hr>
                    {{-- @dd($rooms) --}}
                    @foreach ($rooms as $room)
                        <p class="text-secondary">
                            <strong>{{ ucfirst ($room->name) }}</strong> {{ $room->total }}
                        </p>
                        <hr>
                    @endforeach
                    <br>

                    <p class="text-black-50">
                        {{ $property->created_at->diffForHumans() }}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('properties.index') }}"
                            class="bg-gray-900 mx-auto mt-0 md:mt-2 w-full max-w-xs flex items-center justify-center bg-brand hover:bg-teal-500 outline-none focus:border-teal-900 text-white font-extrabold py-3 px-5 rounded shadow"
                        >
                            {{ __('Back') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
