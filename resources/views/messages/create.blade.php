<x-app-layout>
<div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="addressee"
                                class="block text-sm font-medium text-gray-700"
                            >
                                {{ __('Addressee') }}
                            </label>
                            <select name="recipient_id"
                                id="recipient_id"
                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                            >
                                <option value="">{{ __('Select your recipient') }}</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name . " (" . $user->email . ")" }}</option>
                                @endforeach
                            </select>
                            @include('partials.form-error', ['field' => 'recipient_id'])
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label for="subject" class="block text-sm font-medium text-gray-700">
                                {{ __('Subject') }}
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text"
                                    name="subject"
                                    id="subject"
                                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                    placeholder="{{ __('Hello we have good news') }}"
                                    value="{{ old('subject') }}"
                                />
                            </div>
                            @include('partials.form-error', ['field' => 'subject'])
                        </div>
                    </div>

                    <div>
                        <label for="body"
                            class="block text-sm font-medium text-gray-700"
                        >
                            {{ __('Message') }}
                        </label>
                        <div class="mt-1">
                            <textarea id="body"
                                name="body"
                                rows="3"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                            >
                                {{ old('body') }}
                            </textarea>
                            @include('partials.form-error', ['field' => 'body'])
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                            {{ __('Direct message to your client') }}
                        </p>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Send message') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
  </div>
</x-app-layout>
