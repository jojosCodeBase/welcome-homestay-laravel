@extends('layouts/layout')
@section('content')
    <div class="">
        <div class="">
            <div class="w-full">
                <div class="flex p-5 justify-center items-center relative w-full">
                    <div class="rounded-xl overflow-hidden relative">
                        <img src="{{ asset('assets/images/46.jpg') }}" alt="" class="w-screen h-[80vh] object-cover" />
                        <div
                            class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center bg-[#0000002a] text-white">
                            <span
                                class="orn font-bold sm:text-6xl text-4xl bg-gradient-to-r from-indigo-500 to-teal-600 text-transparent bg-clip-text p-5">
                                Welcome Homestay
                            </span>
                            <span class="orn mt-3 sm:text-md text-xl text-center text-gray-200 font-medium">
                                "Where Comfort and Hospitality Awaits You"
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-6 sm:px-28 pb-5 flex flex-wrap justify-between gap-5">
                <div class="w-full bg-lightb rounded-xl p-5 flex flex-col md:flex-row items-center">
                    <div class="w-full md:w-1/5 justify-center mb-4 md:mb-0 md:mr-10">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="user photo"
                            class="w-28 h-28 object-cover rounded-full mx-auto" />
                    </div>
                    <div class="flex flex-col w-full md:w-4/5">
                        <p class="sm:text-sm text-xs font-semibold mont mb-4 sm:text-left text-center">
                            <span class="sm:text-xl text-sm mont"></span>At Welcome Homestay, we're not just offering
                            accommodation
                            we're inviting you to be a part of our story, where each moment is infused with warmth,
                            authenticity, and
                            the spirit of Darjeeling. Welcome home!<span class="text-sm sm:text-xl mont"></span>
                        </p>
                        <span class="text-sm sm:text-left text-center mont">- Krishna Tamang (Owner)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- About us -->
        <div class="px-6 pb-5 md:px-28 flex flex-col-reverse md:flex-row h-full md:h-[40vh] gap-6 md:gap-10">
            <div class="md:w-1/2 bg-back flex flex-col p-5 rounded-xl">
                <span class="mont text-xl font-semibold text-gray-600">About Us</span>
                <span class="text-sm mt-5">
                    Welcome Homestay is nestling in the arms of Darjeeling, Kanchanjunga Himalayas range, exactly middle
                    of the Bara Mangwa or Mangmaya village with its own shine.
                </span>
                <span class="text-sm mt-3">
                    Mangmaya, is a corruption of the amalgamation of the words Mang and Maya. Mang is wheat in the local
                    tongue while Maya is illusion in terms of Sanskrit word and in nepali “love”.
                </span>
            </div>
            <div class="md:w-1/2 bg-back h-full rounded-xl overflow-hidden">
                <img src="{{ asset('assets/images/15.jpg') }}" alt="relevant description"
                    class="h-full w-full object-cover" />
            </div>
        </div>

        <!-- Accomodation -->
        <div class="px-6 pb-5 md:px-28 flex flex-col-reverse md:flex-row-reverse h-full md:h-[40vh] gap-6 md:gap-10">
            <div class="md:w-1/2 bg-back flex flex-col p-5 rounded-xl">
                <span class="mont font-bold text-xl text-gray-700">
                    Accommodation
                </span>
                <span class="text-sm mt-2">
                    Our homestay offers comprehensive accommodation, ensuring guests' comfort with both food and lodging
                    services.
                    Included in your stay are three delicious meals served daily, featuring breakfast, lunch, and dinner. We
                    take
                    pride in providing hearty and satisfying dishes, prepared with care and using fresh, locally-sourced
                    ingredients.
                </span>
                <span class="text-sm mt-3">
                    Whether you're starting your day with a wholesome breakfast, enjoying a midday meal, or winding
                    down with a satisfying dinner, our culinary offerings aim to make your stay with us memorable and
                    fulfilling.
                </span>
            </div>
            <div class="md:w-1/2 bg-back h-full rounded-xl overflow-hidden">
                <img src="{{ asset('assets/images/3.jpg') }}" alt="relevant description"
                    class="h-full w-full object-cover" />
            </div>
        </div>

        <!-- testimonials -->
        <div class="px-6 md:px-28 pb-5">
            <div class="w-full p-4 bg-orchid rounded-xl flex flex-col">
                <span class="mont text-gray-600 text-sm">Testimonials</span>
                <span class="mont font-bold text-xl text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </span>
                <span class="mt-1 text-sm mont mt-5">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti!
                </span>
                <div class="flex justify-start gap-5 w-full overflow-x-scroll hide-scrollbar" id="testimonialCarousel">
                    <!-- Testimonial 1 -->
                    <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 py-3">
                        <div class="p-4 bg-[#F7F9F9] rounded-lg">
                            <h2 class="mont font-bold text-sm">John Doe</h2>
                            <p class="text-sm mt-2 mont">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                quae dignissimos molestiae!
                            </p>
                            <div class="mt-2 mont text-sm flex items-center gap-1">
                                4.5
                                <img src="{{ asset('assets/icons/star.svg') }}" alt="4.5 star rating" class="w-4 h-4" />
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 py-3">
                        <div class="p-4 bg-[#F7F9F9] rounded-lg">
                            <h2 class="mont font-bold text-sm">John Doe</h2>
                            <p class="text-sm mt-2 mont">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                quae dignissimos molestiae!
                            </p>
                            <div class="mt-2 mont text-sm flex items-center gap-1">
                                4.5
                                <img src="{{ asset('assets/icons/star.svg') }}" alt="4.5 star rating" class="w-4 h-4" />
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 py-3">
                        <div class="p-4 bg-[#F7F9F9] rounded-lg">
                            <h2 class="mont font-bold text-sm">John Doe</h2>
                            <p class="text-sm mt-2 mont">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                quae dignissimos molestiae!
                            </p>
                            <div class="mt-2 mont text-sm flex items-center gap-1">
                                4.5
                                <img src="{{ asset('assets/icons/star.svg') }}" alt="4.5 star rating" class="w-4 h-4" />
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 py-3">
                        <div class="p-4 bg-[#F7F9F9] rounded-lg">
                            <h2 class="mont font-bold text-sm">John Doe</h2>
                            <p class="text-sm mt-2 mont">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                quae dignissimos molestiae!
                            </p>
                            <div class="mt-2 mont text-sm flex items-center gap-1">
                                4.5
                                <img src="{{ asset('assets/icons/star.svg') }}" alt="4.5 star rating" class="w-4 h-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- location -->
        <div class="px-6 md:px-28 pb-5" id="contactus">
            <div class="w-full p-5 bg-[#BED8D4] rounded-xl flex flex-col md:flex-row justify-between">
                <div class="flex flex-col justify-between w-full">
                    <div class="flex flex-col w-full mb-4 md:mb-0">
                        <span class="mont text-sm text-gray-600">Location</span>
                        <span class="mont font-bold text-xl text-gray-700">
                            How to reach Welcome Homestay
                        </span>
                        <span class="text-sm mt-5">
                            Bara Mangwa Village is located 57 km away from Siliguri, and it typically takes about 2 hours to
                            reach by
                            road. Shared cabs will take you to Tista Bazaar, where you'll need to walk or get a ride for the
                            last 4 km
                            to reach Welcome Homestay. Another option is to book a taxi directly to the homestay.
                        </span>
                        <span class="text-sm mt-2">
                            Once the taxi drops you off on the road, you'll be guided to the gates of Welcome Homestay. As
                            you walk
                            along, tranquility envelops you under the shade of towering conifer trees. Soon, you'll find
                            yourself far
                            away from the noise and pollution of civilization, immersed in a realm where nature reigns
                            supreme.
                            Continuing along the ridge, you'll come across a breathtaking sight: Welcome Homestay perched on
                            the edge
                            of the slope, offering unparalleled views of the roaring Teesta River. In the distance, the
                            snow-covered
                            peaks of Darjeeling and Sikkim unfold before your eyes. Such vistas have the power to turn even
                            the
                            simplest moments into unforgettable experiences. It's scenes like these that draw thousands of
                            visitors to
                            these wooded mountains every year.
                        </span>
                    </div>
                    <div class="">
                        <span
                            class="mt-10 flex sm:flex-row flex-col sm:justify-start justify-center items-center gap-3 mb-4">
                            <a href="tel:+919083831824">
                                <button
                                    class="sm:p-3 p-2 sm:text-md text-sm border-2 border-blue-400 hover:bg-blue-300 transition-color ease-in-out duration-300 rounded-lg flex items-center gap-2">
                                    <img src="{{ asset('assets/icons/phone.svg') }}" alt="" class="w-5" />
                                    +91 90838 31824
                                </button>
                            </a>
                            <button
                                class="sm:p-3 p-2 sm:text-md text-sm border-2 border-green-400 hover:bg-green-300 transition-color ease-in-out duration-300 rounded-lg flex items-center gap-2"
                                onclick="openWhatsapp()">
                                <img src="{{ asset('assets/icons/whatsapp.svg') }}" alt="" class="w-5" />
                                +91 89440 65233
                            </button>
                        </span>
                    </div>
                </div>
                <!-- replace with actual location -->
                <!-- <div class="rounded-xl overflow-hidden w-full">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28411.281346249652!2d88.61501527431642!3d27.111888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e403a8f5cb0d09%3A0x484cfb70d4671ad0!2sWELCOME%20HOMESTAY!5e0!3m2!1sen!2sin!4v1707063077947!5m2!1sen!2sin"
                    width="600" height="300" style="border: 0" class="w-full" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> -->
            </div>
        </div>
    </div>
@endsection
