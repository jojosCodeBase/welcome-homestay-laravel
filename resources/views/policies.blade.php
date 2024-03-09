@extends('layouts/layout')
@section('content')
    <div class="">
        <!-- features section -->
        <div class="px-6 md:px-28 pb-5" id="services">
            <h2 class="text-3xl pl-5 mt-8 mb-2 text-teal font-medium">Property Rules & Information</h2>
            <div class="w-full p-5 rounded-xl flex flex-col md:flex-row justify-between">
                <div class="flex flex-col justify-between w-full">
                    <div class="flex flex-col w-full mb-4 md:mb-0">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                            <div class="bg-white p-6 rounded-lg shadow-md border card">
                                <h4 class="text-xl font-semibold mb-2"><span class="text-teal">Restriction</span>
                                </h4>
                                <div class="flex justify-center">
                                    <ul class="list-disc pl-4">
                                        <li class="pb-2">
                                            Passport, Aadhar, and Driving License are accepted as ID proof(s)
                                        </li>
                                        <li class="pb-2">
                                            Pets are not allowed.
                                        </li>
                                        <li class="pb-2">
                                            Outside food is not allowed.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md border card">
                                <h4 class="text-xl font-semibold mb-2"><span class="text-teal">ID Proof Related
                                    </span>
                                </h4>
                                <div class="flex justify-center">
                                    <ul class="list-disc pl-4">
                                        <li class="pb-2">
                                            Passport, Aadhar and Driving License are accepted as ID proof(s)
                                        </li>
                                        <li class="pb-2">
                                            Local ids are allowed

                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-lg shadow-md border card">
                                <h4 class="text-xl font-semibold mb-2"><span class="text-teal">Food Arrangement
                                    </span>
                                </h4>
                                <div class="flex justify-center">
                                    <ul class="list-disc pl-4">
                                        <li class="pb-2">
                                            Non veg food is allowed
                                        </li>
                                        <li class="pb-2">
                                            Food delivery service is not available at the property
                                        </li>
                                        <li class="pb-2">
                                            In room dining available
                                        </li>
                                        <li class="pb-2">
                                            Outside food is not allowed

                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-lg shadow-md border card">
                                <h4 class="text-xl font-semibold mb-2"><span class="text-teal">Smoking/Alcohol consumption
                                        Rules
                                    </span>
                                </h4>
                                <div class="flex justify-center">
                                    <ul class="list-disc pl-4">
                                        <li class="pb-2">
                                            There are no restrictions on alcohol consumption
                                        </li>
                                        <li class="pb-2">
                                            Food delivery service is not available at the property
                                        </li>
                                        <li class="pb-2">
                                            Smoking within the premises is allowed but not allowed inside the room
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-lg shadow-md border card">
                                <h4 class="text-xl font-semibold mb-2"><span class="text-teal">Property Damage
                                    </span>
                                </h4>
                                <div class="flex justify-center">
                                    <ul class="list-disc pl-4">
                                        <li class="pb-2">
                                            Guests are responsible for covering any costs associated with property damage that occurs during their stay in the homestay
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-lg shadow-md border card">
                                <h4 class="text-xl font-semibold mb-2"><span class="text-teal">Property Accessibility
                                    </span>
                                </h4>
                                <div class="flex justify-center">
                                    <ul class="list-disc pl-4">
                                        <li class="pb-2">
                                            This property is not accessible to guests who use a wheelchair. Please make
                                            arrangements accordingly
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-lg shadow-md border card">
                                <h4 class="text-xl font-semibold mb-2"><span class="text-teal">Child & Extra Bed Policy
                                    </span>
                                </h4>
                                <div class="flex justify-center">
                                    <ul class="list-disc pl-4">
                                        <li class="pb-2">
                                            No extra bed will be provided to accommodate any child included in the booking
                                        </li>
                                        <li class="pb-2">
                                            An extra bed will be provided to accommodate any additional guest included in
                                            the booking for a charge mentioned below

                                        </li>
                                        <li class="pb-2">
                                            INR 800 will be charged for an extra mattress per guest. (To be paid at the
                                            property)
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-lg shadow-md border card">
                                <h4 class="text-xl font-semibold mb-2"><span class="text-teal">Other Rules
                                    </span>
                                </h4>
                                <div class="flex justify-center">
                                    <ul class="list-disc pl-4">
                                        <li class="pb-2">
                                            Unmarried couples are allowed
                                        </li>
                                        <li class="pb-2">
                                            Does not allow private parties or events
                                        </li>
                                        <li class="pb-2">
                                            Guests are requested not to invite outside visitors in the room during their
                                            stay
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
