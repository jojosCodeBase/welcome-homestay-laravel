<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome Homestay Darjeeling</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-round.png') }}" type="image/x-icon" />
    <meta name="description"
        content="Experience the warm hospitality of WelcomeHomestay, your ultimate homestay destination in enchanting Darjeeling. Immerse yourself in the wonders of this picturesque town, as we welcome you as part of our extended family. Discover the beauty of Darjeeling with a stay at WelcomeHomestay, where heartfelt hospitality meets the breathtaking landscapes of this charming locale." />
    <meta name="keywords"
        content="Darjeeling, Homestay, Welcome Homestay, Webpage, Family, Budget, Cozy, Mountain, Himalaya, Charming, Tea, Queen, Comfort, Taste, Food, View, Travel, Tourist, Friendly, Best Tea, Local, Experience, Serenity" />
    <meta name="author" content="Krishna Tamang" />
    <script src="{{ asset('assets/js/Components.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                        lightb: "#B8DBD9",
                        spring: "#04724D",
                        back: "#FDF5E6",
                        orchid: "#EFB9CB",
                    },
                },
            },
        };
    </script>
    <script src="{{ asset('assets/js/script.js') }}" defer></script>
</head>

<body>
    <header class="w-full p-2 border-2 rounded-b-xl border-slate-200">
        <nav
            class="w-full sm:w-[85%] m-auto sm:flex flex-col transition-all duration-200 ease-in-out justify-between items-center">
            <div class="w-full flex justify-between items-center">
                <div class="">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Welcome homestay logo" class="w-28" />
                    </a>
                </div>
                <div class="md:flex hidden items-center space-x-5">
                    <ul class="md:flex hidden space-x-4 items-center">
                        <li>
                            <a href="{{ route('home') }}"
                                class="{{ request()->url('/') == route('home') ? 'active' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="{{ request()->url('/about') == route('about') ? 'active' : '' }}">About us</a>
                        </li>
                        <li>
                            <a href="{{ route('gallery') }}"
                                class="{{ request()->url('/gallery') == route('gallery') ? 'active' : '' }}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#services">Our Services</a>
                        </li>
                        <li>
                            <a href="{{ route('places') }}" class="{{ request()->url('/places') == route('places') ? 'active' : '' }}">Places</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#contactus">Contact us</a>
                        </li>
                    </ul>
                    <button
                        class="sm:flex hidden items-center border-2 border-green-500 pr-2 hover:bg-green-200 transition-colors duration-200 ease-in-out p-1 rounded-xl justify-between sm:text-md text-sm"
                        onclick="openWhatsapp()">
                        <img src="{{ asset('assets/icons/whatsapp.svg') }}" alt="" class="sm:w-8 w-7 mr-1" />
                        WhatsApp
                    </button>
                </div>
                <div class="block sm:hidden">
                    <button id="toggleMenu" class="hamburger">
                        <label>
                            <input type="checkbox" id="toggleCheckbox" />
                            <svg viewBox="0 0 32 32">
                                <path class="line line-top-bottom"
                                    d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22">
                                </path>
                                <path class="line" d="M7 16 27 16"></path>
                            </svg>
                        </label>
                    </button>
                </div>
            </div>
            <div class="w-full hidden" id="menuContents">
                <ul class="flex flex-col justify-center items-center mt-2 rounded-md border-2 space-y-2">
                    <li>
                        <a href="{{ route('home') }}"
                            class="{{ request()->url('/') == route('home') ? 'active' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="{{ request()->url('/about') == route('about') ? 'active' : '' }}">About us</a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}"
                            class="{{ request()->url('/gallery') == route('gallery') ? 'active' : '' }}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#services">Our Services</a>
                    </li>
                    <li>
                        <a href="{{ route('places') }}" class="{{ request()->url('/places') == route('places') ? 'active' : '' }}">Places</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#contactus">Contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="border-t-2 rounded-t-xl border-x-2 py-5 md:px-2 lg:px-28">
        {{-- <div class="flex flex-col md:flex-row md:items-start md:justify-between pb-4"> --}}
        <div class="flex flex-col md:flex-row md:items-start  pb-4">
            <!-- Footer left -->
            <div class="flex flex-col items-center mb-6 md:mb-0 md:items-start md:w-1/2">
                <img src="{{ asset('assets/images/logo-transparent.png') }}" alt="logo"
                    class="w-36 mb-2 md:mb-3" />
                <h2 class="mont text-xl md:text-2xl font-bold text-center md:text-left">
                    WELCOME HOMESTAY
                </h2>
                <p class="text-xs md:w-2/3 text-center md:text-left leading-snug mt-2">
                    Where Comfort and Hospitality Awaits You
                </p>
                <div class="flex mt-3 gap-3">
                    <a href="" target="_blank" aria-label="Facebook" rel="noopener noreferrer">
                        <img src="{{ asset('assets/icons/facebook.svg') }}" alt="Facebook" class="w-6" />
                    </a>
                    <a href="" target="_blank" aria-label="Instagram" rel="noopener noreferrer">
                        <img src="{{ asset('assets/icons/instagram.svg') }}" alt="Instagram" class="w-6" />
                    </a>
                    <a href="" target="_blank" aria-label="Twitter" rel="noopener noreferrer">
                        <img src="{{ asset('assets/icons/twitter.svg') }}" alt="Twitter" class="w-6" />
                    </a>
                </div>
            </div>
            <!-- Footer right -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:w-1/1 p-6 sm:p-0">
                <div class="">
                    <span class="mont font-bold">Address</span>
                    <ul class="pt-2">
                        <li class="mont text-sm">
                            C/O Krishna Tamang,
                        </li>
                        <li class="mont text-sm mt-1">
                            Near Bara Mangwa Community Hall,
                        </li>
                        <li class="mont text-sm mt-1">
                            Bara Mangwa Busty, P.O. Takling Busty,
                        </li>
                        <li class="mont text-sm mt-1">
                            Rangli Rangliot, Darjeeling - 734312
                        </li>
                    </ul>
                </div>
                <div class="">
                    <span class="mont font-bold">Quick Links</span>
                    <ul class="pt-2">
                        <li class="mont text-sm">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="mont text-sm mt-2">
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="mont text-sm mt-2">
                            <a href="{{ route('gallery') }}">Gallery</a>
                        </li>
                        <li class="mont text-sm mt-2">
                            <a href="{{ route('home') }}#services">Our Services</a>
                        </li>
                        <li class="mont text-sm mt-2">
                            <a href="{{ route('places') }}">Places</a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <span class="mont font-bold">Policies</span>
                    <ul class="pt-2">
                        <li class="mont text-sm">
                            <a href="{{ route('policies') }}">Rules</a>
                        </li>
                        <li class="mont text-sm mt-2">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="mont text-sm mt-2">
                            <a href="#">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <span class="mont font-bold">Contact us</span>
                    <ul class="pt-2">
                        <li class="mont text-sm text-teal mb-2">
                            <i class="bi bi-telephone-fill pr-2"></i> 9083831824
                        </li>
                        <li class="mont text-sm text-teal mb-2">
                            <i class="bi bi-whatsapp pr-2"></i> 8944065233
                        </li>
                        <li class="mont text-sm text-teal mb-2">
                            <i class="bi bi-envelope pr-2"></i> welcomehomestay2024@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="mb-4" />
        <!-- Footer bottom -->
        <div class="flex flex-col md:flex-row justify-between items-center md:items-end text-center md:text-left">
            <span class="mont text-xs mb-2 md:mb-0">© 2024 Welcome Homestay</span>
            <div class="">
                <p class="text-lg text-teal font-semibold">Total Visitors: {{ $visitor_count }}</p>
            </div>
            <div class="text-xs mont flex flex-col">
                <span>Designed & Developed by Kunsang Moktan</span>
            </div>
        </div>
    </footer>
    @yield('scripts')
</body>

</html>
