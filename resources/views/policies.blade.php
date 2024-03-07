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
                                <h4 class="text-xl font-semibold mb-2"><span class="text-teal">Guest Profile</span>
                                </h4>
                                <div class="flex justify-center">
                                    <ul class="list-disc pl-4">
                                        <li class="pb-2">
                                            Unmarried couples allowed
                                        </li>
                                        <li class="pb-2">
                                            Groups with only male guests are not allowed at this property

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
                                            There are no restrictions on alcohol consumption.
                                        </li>
                                        <li class="pb-2">
                                            Food delivery service is not available at the property
                                        </li>
                                        <li class="pb-2">
                                            Smoking within the premises is allowed
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-lg shadow-md border card">
                                <h4 class="text-xl font-semibold mb-2"><span class="text-teal">Pet(s) Related
                                    </span>
                                </h4>
                                <div class="flex justify-center">
                                    <ul class="list-disc pl-4">
                                        <li class="pb-2">
                                            Pets are not allowed.
                                        </li>
                                        <li class="pb-2">
                                            There are no pets living on the property
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
                                            arrangements accordingly.
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
                                            Does not allow private parties or events
                                        </li>
                                        <li class="pb-2">
                                            Guests are requested not to invite outside visitors in the room during their
                                            stay.
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
                                            No extra bed will be provided to accommodate any child included in the booking.
                                        </li>
                                        <li class="pb-2">
                                            An extra bed will be provided to accommodate any additional guest included in
                                            the booking for a charge mentioned below.

                                        </li>
                                        <li class="pb-2">
                                            INR 400 will be charged for an extra mattress per guest. (To be paid at the
                                            property)
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

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
