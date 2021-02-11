<x-app-layout>

    @include('layouts.navigation')

    <div class="pt-0 flex content-center items-center justify-center" style="z-index: 2; background-color: #ebe3e3">
        <div class="relative top-0 w-full h-full bg-center bg-cover overflow-hidden md:max-h-96" style="max-width: 100%;">
          <img src="/img/buildings_ud.png" alt="" style="max-width: 100%">
        </div>
    </div>
    <div class="w-10/12 mx-auto rounded-md shadow-lg p-10">
        <div class="grid grid-cols-3 gap-4">
            <div>
                Navn
            </div>
            <div>
                E-mail
            </div>
            <div>
                Handle
            </div>
            <hr class="col-span-3 w-full relative mt-5 mb-5 bottom-2" align="center" size="2" width="50%" style="background-color: #9D9D9C" />
            @foreach ($users as $user)
                <div>
                    {{ $user->name }}
                </div>
                <div>
                    {{ $user->email }}
                </div>
                <div>
                    <button
                    style="background-color: #86020c; hover:cursor:pointer"
                    >Delete
                    </button>
                
                    <button
                        style="background-color: #41a438; hover:cursor:pointer"
                    >Send email
                    </button>
                </div>
            @endforeach
        </div>
    </div>


</x-app-layout>