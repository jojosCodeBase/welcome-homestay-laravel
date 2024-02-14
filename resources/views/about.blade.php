@extends('layouts/layout')
@section('content')
    <div class="bgimg mb-5">
        <div class="bg-white pb-5">
            <!-- about -->
            <div class="bgimggradient">
                <div class="flex flex-col px-5 py-5 justify-between backdrop-blur-sm sm:flex-row sm:px-28 sm:pb-5">
                    <div class="rounded-xl overflow-hidden h-[70vh] w-full sm:w-[40%] mb-5 bg-rose-400 sm:mb-0">
                        <img src="{{ asset('assets/images/10.jpg') }}" alt="home" class="w-full h-full object-fit" />
                    </div>
                    <div class="w-full sm:w-[55%] flex flex-col p-5">
                        <span class="mont"> About Welcome Homestay </span>
                        <span class="text-xl font-semibold mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est
                            quos nostrum animi!
                        </span>
                        <span class="mt-5">
                            Welcome to Welcome Homestay, your serene haven nestled in the breathtaking foothills of the
                            Himalayas in
                            Darjeeling. Embraced by the tranquility of nature and enriched by the warmth of local
                            hospitality, Welcome
                            Homestay offers you an unforgettable retreat amidst the majestic Himalayan landscape.
                        </span>
                        <span class="mt-2">
                            At Welcome Homestay, our dedicated team is committed to ensuring that your stay is nothing short
                            of extraordinary. Whether it's arranging guided tours to iconic landmarks, organizing cultural
                            experiences, or catering to your dietary preferences, we go above and beyond to tailor our
                            services to meet your needs and exceed your expectations.
                        </span>
                        <span class="mt-2">
                            Escape the hustle and bustle of city life and embark on a soulful journey to Welcome Homestay,
                            where every moment is a celebration of nature, culture, and heartfelt hospitality. Whether
                            you're seeking a romantic getaway, a family vacation, or a solo adventure, let Welcome Homestay
                            be your gateway to an authentic Himalayan experience.
                        </span>
                        <span class="mt-2">
                            Experience the essence of Darjeeling hospitality at Welcome Homestay – your oasis of serenity in
                            the heart of the Himalayas. Welcome home!
                        </span>
                    </div>
                </div>
            </div>

            <!-- cards -->
            <div class="w-full px-4 md:px-28 flex flex-col space-y-5">
                <div class="flex flex-col md:flex-row md:space-x-5 space-y-0 md:space-y-0">
                    <div class="bg-teal-400 p-5 rounded-xl flex flex-col w-full md:w-1/2 mb-5 md:mb-0">
                        <span class="mont font-semibold text-xl">
                            Our Location
                        </span>
                        <span class="mt-5 text-sm">
                            Welcome Homestay is strategically situated in Darjeeling, a picturesque town renowned for its
                            lush tea gardens, panoramic vistas, and vibrant culture. Our homestay provides you with easy
                            access to Darjeeling's most iconic attractions, including the renowned Darjeeling Himalayan
                            Railway, Tiger Hill, and the vibrant markets brimming with local crafts and flavors.
                        </span>
                    </div>
                    <div class="bg-teal-400 p-5 rounded-xl flex flex-col w-full md:w-1/2 mb-5 md:mb-0">
                        <span class="mont font-semibold text-xl">
                            Your Home Away From Home
                        </span>
                        <span class="mt-5 text-sm">
                            At Welcome Homestay, we pride ourselves on offering a home away from home experience. Our cozy
                            and well-appointed accommodations provide you with a comfortable sanctuary to unwind and
                            rejuvenate after a day of exploration. Each room is thoughtfully designed to reflect the charm
                            of the region while ensuring modern amenities for your convenience.
                        </span>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row md:space-x-5 space-y-0 md:space-y-0">
                    <div class="bg-teal-400 p-5 rounded-xl flex flex-col w-full md:w-1/2 mb-5 md:mb-0">
                        <span class="mont font-semibold text-xl">
                            Immerse in Local Culture
                        </span>
                        <span class="mt-5 text-sm">
                            Experience the rich cultural tapestry of Darjeeling by immersing yourself in the vibrant
                            traditions of our community. From savoring authentic Himalayan cuisine prepared with locally
                            sourced ingredients to engaging in insightful conversations with our friendly hosts, Welcome
                            Homestay invites you to become a part of our extended family and create cherished memories that
                            will last a lifetime.
                        </span>
                    </div>
                    <div class="bg-teal-400 p-5 rounded-xl flex flex-col w-full md:w-1/2 mb-5 md:mb-0">
                        <span class="mont font-semibold text-xl">
                            Explore Nature's Splendor
                        </span>
                        <span class="mt-5 text-sm">
                            Wake up to the melodious chirping of birds and the refreshing aroma of mountain air as you step
                            outside to explore the natural wonders surrounding our homestay. Embark on invigorating nature
                            walks through verdant forests, indulge in birdwatching amidst lush landscapes, or simply bask in
                            the tranquility of our garden while soaking in panoramic views of the Himalayas.
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- end -->
        <div class="w-full px-4 md:px-28 p-5">
            <div class="glassbox p-5 flex flex-col-reverse md:flex-row justify-between">
                <div class="flex flex-col w-full md:w-1/2 justify-end mb-5 md:mb-0">
                    <span class="mont font-semibold text-xl">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Molestias sint accusamus vel?
                    </span>
                    <span class="mt-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
                        natus non ut nulla. Eos repellat voluptas sed iure quia possimus!
                        Ratione, sit voluptatem.
                    </span>
                    <span class="mt-5 flex flex-col sm:flex-row justify-center sm:justify-start items-center gap-3">
                        <button
                            class="sm:p-3 p-2 sm:text-md text-sm border-2 border-blue-400 hover:bg-blue-300 transition-color ease-in-out duration-300 rounded-lg flex items-center gap-2">
                            <img src="{{ asset('assets/icons/phone.svg') }}" alt="" class="w-5" />
                            +91 90838 31824
                        </button>
                        <button
                            class="sm:p-3 p-2 sm:text-md text-sm border-2 border-green-400 hover:bg-green-300 transition-color ease-in-out duration-300 rounded-lg flex items-center gap-2">
                            <img src="{{ asset('assets/icons/whatsapp.svg') }}" alt="" class="w-5" />
                            +91 89440 65233
                        </button>
                    </span>
                </div>
                <div class="glass overflow-hidden sm:mb-0 mb-5 w-full md:w-[50%] h-[40vh]">
                    <img src="{{ asset('assets/images/10.jpg') }}" alt="home" class="w-full h-full object-fit" />
                </div>
            </div>
        </div>
    </div>
@endsection
