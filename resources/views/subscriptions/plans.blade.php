<link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
<style>
    @media (min-width: 640px) {
      .sm\:bg-svg-bottom {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='353' height='304'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23D0D5F6' stroke-width='2'%3E%3Cpath d='M180.29 759c102.087-21.62 155.232-61.312 159.437-119.074 6.307-86.643-231.598-17.186-136.358-198 95.241-180.813 181.318-185.29 136.358-298C294.767 31.216 174.04-27.954 33.79 16.8c-93.501 29.836-144.652 140.545-153.453 332.126'/%3E%3Cpath d='M138.3 759c80.083-18.988 121.774-53.846 125.072-104.575 4.948-76.093-181.679-15.094-106.966-173.89C231.118 321.738 298.64 317.808 263.372 218.82c-35.269-98.986-129.974-150.95-239.995-111.646C-49.97 133.378-90.096 230.605-97 398.859'/%3E%3Cpath d='M102.065 761c60.604-16.56 92.153-46.963 94.65-91.208 3.743-66.367-137.488-13.165-80.949-151.664 56.54-138.5 107.638-141.927 80.948-228.261-26.69-86.335-98.359-131.656-181.618-97.376C-40.41 215.345-70.775 300.145-76 446.892'/%3E%3C/g%3E%3C/svg%3E");
      }
    }

    .toggle_dot {
      top: -.25rem;
      transition: all 0.3s ease-in-out;
    }

    input:checked~.toggle_dot {
      transform: translateX(100%);
      background-color: #0082c8;
    }

    .bg-gradient {
      background: #667db6;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .bg-gradient-base {
      background-color: #0082c8;
    }

    .font-work-sans {
      font-family: 'Work Sans', sans-serif;
    }
  </style>
<x-app-layout>
    <main class="text-gray-900 font-work-sans h-screen bg-no-repeat bg-left-bottom sm:bg-svg-bottom">

        <svg class="absolute top-0 right-0 h-full" xmlns="http://www.w3.org/2000/svg" width="375" height="658">
            <g fill="none" fill-rule="evenodd" stroke="#D0D5F6" stroke-width="2">
            <path d="M172.71-101C70.623-79.38 17.478-39.688 13.273 18.074c-6.307 86.643 231.598 17.186 136.358 198-95.241 180.813-181.318 185.29-136.358 298C58.233 626.784 178.96 685.954 319.21 641.2c93.501-29.836 144.652-140.545 153.453-332.126" />
            <path d="M214.7-101C134.617-82.012 92.926-47.154 89.628 3.575c-4.948 76.093 181.679 15.094 106.966 173.89C121.882 336.262 54.36 340.192 89.628 439.18c35.269 98.986 129.974 150.95 239.995 111.646C402.97 524.622 443.096 427.395 450 259.141" />
            <path d="M250.935-103c-60.604 16.56-92.153 46.963-94.65 91.208-3.743 66.367 137.488 13.165 80.949 151.664-56.54 138.5-107.638 141.927-80.948 228.261 26.69 86.335 98.359 131.656 181.618 97.376C393.41 442.655 423.775 357.855 429 211.108" />
            </g>
        </svg>

        <h1 class="text-center font-bold text-5xl mt-8 tracking-wide relative">Our Pricing</h1>

        <div class="flex flex-row justify-center my-4 text-sm tracking-tight font-medium text-gray-700">
            <p class="mx-3">Annually</p>
            <label for="toggle" class="flex items-center cursor-pointer">
                <div class="relative">
                    <input id="toggle" type="checkbox" class="hidden" onclick="myFunction()" />
                    <div class="w-10 h-3 bg-gray-400 rounded-full shadow-inner"></div>
                    <div class="toggle_dot absolute w-5 h-5 bg-white rounded-full shadow inset-y-0 left-0"></div>
                </div>
            </label>
            <p class="mx-3">Monthly</p>
        </div>

        <div class="flex flex-col md:flex-row md:transform md:scale-75 lg:scale-100 justify-center">
            <div class="border rounded-lg md:rounded-r-none text-center p-5 mx-auto md:mx-0 my-2 md:my-6 bg-gray-100 font-medium z-10 shadow-lg">
            <div class="plan">Basis</div>
            <img src="{{ asset('img/package_basis.png') }}" width="200" alt="basis">
            <div id="month" class="font-bold text-6xl month hidden">
                &dollar;{{ __(":price", ['price' => '995']) }}
            </div>
            <div id="annual" class="font-bold text-6xl annual">
                &dollar;{{ __(":price", ['price' => '9.552']) }}
            </div>
            <hr>
            <div class="text-sm my-3">
                {{ __('Søg kartotek') }}
            </div>
            <hr>
            <div class="text-sm my-3">
                {!! __('Notification hver gang en<br>my skriver sig op') !!}
            </div>
            <hr>
            <div class="text-sm my-3">
                {{ __('Favorite liste') }}
            </div>
            <hr>
            <form method="POST" action="{{ route('subscriptions.process_subscriptions') }}">
                @csrf
                <input type="hidden" name="name" value="Subscription basis">
                <input type="hidden" id="PLAN_BASIS" name="type" value="{{ env('PLAN_ANNUAL_BASIS') }}">
                <button type="submit"
                    class="modal-open bg-gradient-base border border-blue-600 hover:bg-white text-white hover:text-blue-600 font-bold uppercase text-xs mt-5 py-2 px-4 rounded cursor-pointer"
                >
                    {{ __("Suscribirme") }}
                </button>
            </form>
            </div>

            <div class="border-transparent rounded-lg text-center p-5 mx-auto md:mx-0 my-2 bg-gradient text-white font-medium z-10 shadow-lg">
            <div class="py-4">
                <div class="plan">Plus</div>
                <img src="{{ asset('img/package_plus.png') }}" width="200" alt="plus">
                <div id="month" class="font-bold text-6xl month hidden">
                    &dollar;{{ __(":price", ['price' => '1.495']) }}
                </div>
                <div id="annual" class="font-bold text-6xl annual">
                    &dollar;{{ __(":price", ['price' => '14.352']) }}
                </div>
                <hr>
                <div class="text-sm my-3">BASIS+</div>
                <hr>
                <div class="text-sm my-3">
                    {!! __('Forøg salget med udvidet<br>viden om køberne') !!}
                </div>
                <hr>
                <div class="text-sm my-3">Send up to 10 GB</div>
                <hr>
                <form method="POST" action="{{ route('subscriptions.process_subscriptions') }}">
                    @csrf
                    <input type="hidden" name="name" value="Subscription plus">
                    <input type="hidden" id="PLAN_PLUS" name="type" value="{{ env('PLAN_ANNUAL_PLUS') }}">
                    <button type="submit"
                        class="modal-open bg-gradient-base border border-blue-600 hover:bg-white text-white hover:text-blue-600 font-bold uppercase text-xs mt-5 py-2 px-4 rounded cursor-pointer"
                    >
                        {{ __("Suscribirme") }}
                    </button>
                </form>
            </div>
            </div>

            <div class="border rounded-lg  md:rounded-l-none text-center p-5 mx-auto md:mx-0 my-2 md:my-6 bg-gray-100 font-medium z-10 shadow-lg">
            <div class="plan">Premium</div>
            <img src="{{ asset('img/package_premium.png') }}" width="200" alt="premium">
            <div id="month" class="font-bold text-6xl month hidden">
                &dollar;{{ __(":price", ['price' => '1.995']) }}
            </div>
            <div id="annual" class="font-bold text-6xl annual">
                &dollar;{{ __(":price", ['price' => '19.152']) }}
            </div>
            <hr>
            <div class="text-sm my-3">PLUS+</div>
            <hr>
            <div class="text-sm my-3">
                {!! __('Markedsføringspakke som <br> anbefalet mægler hvor du<br>præsenterer Venando') !!}
            </div>
            <hr>
            <div class="text-sm my-3">
                {!! __('Dit visitkort vises som lokal<br>mægler hos de boligsøgende') !!}
            </div>
            <hr>
            <div class="text-sm my-3">
                {!! __('Se hvem som drømmer sig<br>væk fra dit postnummer og målret<br>din flyer markedsføring') !!}
            </div>
            <hr>
            <form method="POST" action="{{ route('subscriptions.process_subscriptions') }}">
                @csrf
                <input type="hidden" name="name" value="Subscription premium">
                <input type="hidden" id="PLAN_PREMIUM" name="type" value="{{ env('PLAN_ANNUAL_PREMIUM') }}">
                <button type="submit"
                    class="modal-open bg-gradient-base border border-blue-600 hover:bg-white text-white hover:text-blue-600 font-bold uppercase text-xs mt-5 py-2 px-4 rounded cursor-pointer"
                >
                    {{ __("Suscribirme") }}
                </button>
            </form>
            </div>
        </div>
    </main>
</x-app-layout>
<script>
    // TODO: renderizar directo de stripe
    // async function getPlan(id) {
	// 	try {
	// 		let response = await fetch('https://api.stripe.com/v1/products/' + id);
	// 		return response;
	// 	} catch (e) {
	// 		fallo(e)
	// 	}
	// }

    let premium = document.getElementById('PLAN_PREMIUM')
    let plus = document.getElementById('PLAN_PLUS')
    let basis = document.getElementById('PLAN_BASIS')

    function myFunction() {
        var x = document.querySelectorAll('.annual');
        var y = document.querySelectorAll('.month');

        for (var i = 0; i < x.length; i++) {
            if (document.getElementById("toggle").checked == true) {
                x[i].classList.add('hidden');
                y[i].classList.remove('hidden');
            } else {
                x[i].classList.remove('hidden');
                y[i].classList.add('hidden');
            }
        }

        if (document.getElementById("toggle").checked) {
            basis.value = '{{ env("PLAN_MONTHLY_BASIS") }}'
            plus.value = '{{ env("PLAN_MONTHLY_PLUS") }}'
            premium.value = '{{ env("PLAN_MONTHLY_PREMIUM") }}'
        } else {
            basis.value = '{{ env("PLAN_ANNUAL_BASIS") }}'
            plus.value = '{{ env("PLAN_ANNUAL_PLUS") }}'
            premium.value = '{{ env("PLAN_ANNUAL_PREMIUM") }}'
        }
    }
</script>
