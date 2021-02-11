@csrf
{{-- @include('properties.map') --}}


<div class="pt-5 pb-32">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <form method="PUT" action="{{ route('user.update') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mt-4">
                        <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus value="{{ Auth::user()->name }}" />
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus value="{{ Auth::user()->email }}" />
                        </div>
                    </div>

                    <!-- Display Name -->
                    <div class="mt-4">
                        <div>
                            <x-label for="display_name" :value="__('Display Name')" />

                            <x-input id="display_name" class="block mt-1 w-full" type="text" name="display_name" required autofocus value="{{ Auth::user()->display_name }}" />
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="mt-4">
                        <div>
                            <x-label for="phone" :value="__('Phone')" />

                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" required autofocus value="{{ Auth::user()->phone }}" />
                        </div>
                    </div>

                    <!-- Role -->
                    <div class="mt-4">
                        <div>
                            <x-label for="role" :value="__('Role')" />

                            <x-input id="role" class="block mt-1 w-full" type="text" name="role" required autofocus value="{{ Auth::user()->role }}" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            {{ __('Save') }}
                        </x-button>
                    </div>
                    <div style="height: 10em">
                        @include('properties.map')
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
{{-- <div class="custom-file mb-2">
    <input name="image"
        type="file"
        class="custom-file-input"
        id="customFile"
    >
    <label class="custom-file-label" for="customFile">
        {{ __('Choose file') }}
    </label>
</div>

<div class="form-group">
    <label for="category_id">
        {{ __('Project category') }}
    </label>
    <select name="category_id"
        id="category_id"
        class="form-control border-0 bg-light shadow-sm"
    >
        <option value="">{{ __('Select') }}</option>
        @foreach ($categories as $key => $value)
            <option value="{{ $key }}"
                @if ( $key == old('category_id', $project->category_id) ) selected @endif
            >
                {{ $value }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="title">{{ __('Title') .' '. __('of the project') }}</label>
    <input class="form-control border-0 bg-light shadow-sm"
        id="title"
        name='title'
        value="{{ old('title', $project->title) }}"
    >
</div>

<div class="form-group">
    <label for="url">{{ 'URL ' . __('of the project') }}</label>
    <input class="form-control border-0 bg-light shadow-sm"
        id="url"
        name='url'
        value="{{ old('url', $project->url) }}"
    >
</div>

<div class="form-group">
    <label for="description">{{ __('Description') .' '. __('of the project') }}</label>
    <textarea class="form-control border-0 bg-light shadow-sm"
        name="description"
        id="description"
        cols="30"
        rows="10">{{  old('description', $project->description) }}
    </textarea>
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>

<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">
    {{ __('Cancel') }}
</a> --}}
