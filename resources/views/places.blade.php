@extends('layouts/layout')
@section('content')
    <h1 class="text-center font-bold text-xl mt-5 text-teal">Places to Visit</h1>
    <div class="mt-5">
        <!-- Orange Garden -->
        <div class="px-6 pb-5 md:px-28 flex flex-col-reverse md:flex-row h-full md:h-[40vh] gap-6 md:gap-10">
            <div class="md:w-1/2 bg-back flex flex-col p-5 rounded-xl">
                <span class="mont text-xl font-semibold text-gray-600">Orange Garden</span>
                <span class="text-sm mt-5 font-medium leading-relaxed text-justify">
                    Indulge in a unique delight as you pluck ripe oranges directly from the hillside and savor their
                    freshness and youthfulness. This exceptional experience awaits you in the quaint hamlet of Bara
                    Mangwa, nestled within the scenic beauty of Takdah in Darjeeling.
                </span>
            </div>
            <div class="md:w-1/2 bg-back h-full rounded-xl overflow-hidden">
                <img src="{{ asset('assets/images/orange-garden.jpeg') }}" alt="relevant description" class="h-full w-full object-cover" />
            </div>
        </div>

        <!-- Rafting -->
        <div class="px-6 pb-5 md:px-28 flex flex-col-reverse md:flex-row-reverse h-full md:h-[40vh] gap-6 md:gap-10">
            <div class="md:w-1/2 bg-back flex flex-col p-5 rounded-xl">
                <span class="mont text-xl font-semibold text-gray-600">
                    White River Rafting
                </span>
                <span class="text-sm mt-3 leading-relaxed font-medium text-justify">
                    Embark on an exhilarating adventure suitable for the entire family - white water river rafting
                    stands out as a top choice. The powerful currents of River Teesta and Rangeet cascade through the
                    Himalayan ranges, forming foaming rapids of varying intensities. These stretches offer ideal
                    conditions for both novice adventurers and experienced rafters alike, promising an unforgettable
                    experience amidst nature's awe-inspiring beauty.
                </span>
            </div>
            <div class="md:w-1/2 bg-back h-full rounded-xl overflow-hidden">
                <img src="{{ asset('assets/images/rafting.jpg') }}" alt="relevant description" class="h-full w-full object-cover" />
            </div>
        </div>

        <!-- Tea Garden -->
        <div class="px-6 pb-5 md:px-28 flex flex-col-reverse md:flex-row-reverse h-full md:h-[40vh] gap-6 md:gap-10">
            <div class="md:w-1/2 bg-back h-full rounded-xl overflow-hidden">
                <img src="{{ asset('assets/images/tea-garden.jpg') }}" alt="relevant description" class="h-full w-full object-cover" />
            </div>
            <div class="md:w-1/2 bg-back flex flex-col p-5 rounded-xl">
                <span class="mont text-xl font-semibold text-gray-600">
                    Peshok Tea Garden
                </span>
                <span class="text-sm mt-3 leading-relaxed font-medium text-justify">
                    Discover the beauty of Peshok Tea Garden, just a stone's throw from our homestay. Surrounded by lush
                    greenery in Darjeeling, it's a serene escape into nature. Wander through tea plantations, soak in
                    the colors and scents, and learn about tea cultivation. With the Himalayas as a backdrop, Peshok is
                    more than a destination; it's an unforgettable experience.
                </span>
            </div>
        </div>

        <!-- Lamahatta -->
        <div class="px-6 pb-5 md:px-28 flex flex-col-reverse md:flex-row-reverse h-full md:h-[40vh] gap-6 md:gap-10">
            <div class="md:w-1/2 bg-back flex flex-col p-5 rounded-xl">
                <span class="mont text-xl font-semibold text-gray-600">
                    Lamahatta
                </span>
                <span class="text-sm mt-3 leading-relaxed font-medium text-justify">
                    Lamahatta is a tiny village found 23km from Darjeeling's main town. It's surrounded by pine forests and
                    offers a stunning view of Mt Kanchenjunga. This charming village became an eco-tourism spot in late
                    2012. The name "Lamahatta" comes from "Lama" meaning Buddhist monk and "Hatta" meaning hut - a monk's
                    dwelling.
                </span>
            </div>
            <div class="md:w-1/2  h-full rounded-xl overflow-hidden">
                <img src="{{ asset('assets/images/lamahatta.jpg') }}" alt="relevant description" class="h-full w-full object-contain" />
            </div>
        </div>

        <!-- Triveni -->
        <div class="px-6 pb-5 md:px-28 flex flex-col-reverse md:flex-row-reverse h-full md:h-[40vh] gap-6 md:gap-10">
            <div class="md:w-1/2 bg-back h-full rounded-xl overflow-hidden">
                <img src="{{ asset('assets/images/triveni.jpg') }}" alt="relevant description" class="h-full w-full object-cover" />
            </div>
            <div class="md:w-1/2 bg-back flex flex-col p-5 rounded-xl">
                <span class="mont text-xl font-semibold text-gray-600">
                    Triveni or Teesta-Rangeet
                </span>
                <span class="text-sm mt-3 leading-relaxed font-medium text-justify">
                    Experience the breathtaking sight of the Great Rangeet River merging with the Teesta, a true delight
                    for nature enthusiasts. However, this incredible spectacle isn't easily accessible. You'll need to
                    venture a bit further from Darjeeling to witness this convergence. At the Triveni point, the
                    emerald-green waters of the Rangeet River flow gracefully to meet the powerful currents of the
                    Teesta, creating a mesmerizing scene.
                </span>
            </div>
        </div>

        <!-- Gumba Dara -->
        <div class="px-6 pb-5 md:px-28 flex flex-col-reverse md:flex-row-reverse h-full md:h-[40vh] gap-6 md:gap-10">
            <div class="md:w-1/2 bg-back flex flex-col p-5 rounded-xl">
                <span class="mont text-xl font-semibold text-gray-600">
                    Gumba Dara
                </span>
                <span class="text-sm mt-3 leading-relaxed font-medium text-justify">
                    In Nepali, "Gumba" translates to monastery, while "Dara" refers to a hilltop. The name of this place
                    originates from an ancient Buddhist monastery nestled within a natural cave atop the hill.
                    Unfortunately, the original monastery now lies in ruins. However, a newer monastery has been
                    constructed approximately 1.5 kilometers away. During the winter season, the mesmerizing view of the
                    majestic Kanchenjunga from this location is truly captivating. Its snow-capped peaks create a
                    stunning sight against the clear, crisp winter sky, leaving visitors in awe of its beauty.
                </span>
            </div>
            <div class="md:w-1/2 bg-back h-full rounded-xl overflow-hidden">
                <img src="{{ asset('assets/images/gumbadara.jpg') }}" alt="relevant description" class="h-full w-full object-cover" />
            </div>
        </div>
    </div>
@endsection
