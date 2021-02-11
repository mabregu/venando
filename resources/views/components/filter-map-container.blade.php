<style>
    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
</style>
<div class="w-full p-6">
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
    >
        <div class="flex-auto p-5 lg:p-10">
            <h4 class="text-2xl font-semibold">
                Search filters
            </h4>
            {{-- <p class="leading-relaxed mt-1 mb-4 text-gray-600">
            Complete this form and we will get back to you in 24 hours.
            </p> --}}
            <form action="{{ route('properties.index') }}">
                <div class="relative w-full mb-3 mt-8">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                        for="full-name"
                    >
                        Location
                    </label>
                        <button type="submit"
                            class="btn btn-link pull-right"
                            style="position: absolute; margin-left: 90%;margin-top: 5%;">
                            <i class="fas fa-search"></i>
                        </button>
                        <input type="text"
                            class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                            placeholder="Location"
                            name="address"
                            style="transition: all 0.15s ease 0s;"
                        />
                    <a
                    href="{{ route('properties.index') }}"
                    class="bg-gray-900 mx-auto mt-0 md:mt-2 w-full max-w-xs flex items-center justify-center bg-brand hover:bg-teal-500 outline-none focus:border-teal-900 text-white font-extrabold py-3 px-5 rounded shadow"
                    >
                        <svg class="h-8 w-8 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        See list
                    </a>
                </div>
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                        for="category"
                    >
                        {{ __('Kind of property') }}
                    </label>
                    <select name="category"
                        id="category"
                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                    >
                        <option value="">Select property type</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                        for="environment"
                    >
                        {{ __('Environments') }}
                    </label>
                    <select name="environment_min"
                        id="environment_min"
                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                    >
                        <option value="">No minimum</option>
                        <option value="1">Monoambiente</option>
                        <option value="2">2 ambientes</option>
                        <option value="3">3 ambientes</option>
                        <option value="4">4 ambientes</option>
                        <option value="5">5 ambientes</option>
                    </select>
                    <select name="environment_max"
                        id="environment_max"
                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                    >
                        <option value="">No maximum</option>
                        <option value="1">Monoambiente</option>
                        <option value="2">2 ambientes</option>
                        <option value="3">3 ambientes</option>
                        <option value="4">4 ambientes</option>
                        <option value="5">5 ambientes</option>
                    </select>
                </div>
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                        for="email"
                    >
                        Bedrooms
                    </label>
                    <select name="rooms_min"
                        id="rooms_min"
                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                    >
                        <option value="">No minimum</option>
                        <option value="1">1 bedrooms</option>
                        <option value="2">2 bedrooms</option>
                        <option value="3">3 bedrooms</option>
                        <option value="4">4 bedrooms</option>
                        <option value="5">5 bedrooms</option>
                    </select>
                    <select name="rooms_max"
                        id="rooms_max"
                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                    >
                        <option value="0">No maximum</option>
                        <option value="1">1 bedrooms</option>
                        <option value="2">2 bedrooms</option>
                        <option value="3">3 bedrooms</option>
                        <option value="4">4 bedrooms</option>
                        <option value="5">5 bedrooms</option>
                    </select>
                </div>
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                        for="email"
                    >
                        Price
                    </label>
                    <input type="number"
                        name="minimum_price"
                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                        placeholder="Minimum price"
                    >
                    <input type="number"
                        name="maximum_price"
                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                        placeholder="Maximum price"
                    >
                </div>
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                        for="email"
                    >
                        Filters
                    </label>
                </div>
                {{-- TODO agregar alert y filtros --}}
                {{-- <div class="text-center mt-6">
                    <button type="button"
                        id="clipboardBtn"
                        data-clipboard-target="#codeSrc"
                        class="bg-gray-900 mx-auto mt-0 md:mt-2 w-full max-w-xs flex items-center justify-center bg-brand hover:bg-teal-500 outline-none focus:border-teal-900 text-white font-extrabold py-3 px-5 rounded shadow"
                    >
                        <svg class="h-8 w-8 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>
                            <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        </svg>
                        Create alert
                    </button>
                </div> --}}
                <div class="text-center mt-6">
                    <button type="submit"
                        id="clipboardBtn"
                        data-clipboard-target="#codeSrc"
                        class="bg-gray-900 mx-auto mt-0 md:mt-2 w-full max-w-xs flex items-center justify-center bg-brand hover:bg-teal-500 outline-none focus:border-teal-900 text-white font-extrabold py-3 px-5 rounded shadow"
                    >
                        <svg class="h-8 w-8 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
