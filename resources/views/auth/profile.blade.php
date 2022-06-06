<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div>
        <div x-data="{form: false}" class=" mx-auto my-5 md:px-8">
            <div class="flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full lg:w-3/12 md:mx-2 hidden lg:block">
                    <!-- Profile Card -->
                    <div class="bg-white dark:bg-slate-800 p-3  rounded-lg  lg:sticky top-20 ">
                        <div class="image overflow-hidden">
                            <div
                                class="h-19 w-19  mx-auto rounded-full bg-orange-300 text-white  font-thin text-5xl pt-2 w-20 h-20  uppercase leading-20 text-center">
                                {{ substr(auth()->user()->name,0,1)}}
                            </div>
                        </div>
                        <h1 class="text-gray-900 dark:text-gray-300 font-bold text-xl leading-1 my-0 text-center">
                            {{ auth()->user()->name }}</h1>
                        <h3 class="text-gray-600 text-sm text-semibold pb-2 text-center">
                            <b title="assigned role">Admin</b> at
                            <b>Xpass
                                Inc.</b>
                        </h3>
                        <p class="text-sm text-gray-500 leading-6 text-center">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit.
                            Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                        <ul
                            class="bg-gray-100 dark:bg-slate-700 dark:text-gray-300 text-gray-600 hover:shadow py-2 px-3 mt-3 divide-y rounded-lg shadow-sm">
                            <li class="flex items-center py-3">
                                <span>Status</span>
                                <span class="ml-auto">
                                    <span class="bg-purple-400 py-1 px-2 rounded-lg text-white text-sm">Active</span>
                                </span>
                            </li>
                            <li class="flex items-center py-3">
                                <span>Member since</span>
                                <span class="ml-auto text-sm">{{ auth()->user()->created_at->format('d M Y') }}</span>
                            </li>
                            <li class="flex flex-col items-center pt-4">
                                <div class="h-8 w-full flex">
                                    <span class="font-bold w-1/2">Active Plan</span>
                                    <span class=" w-1/2 text-left">Pro</span>
                                </div>

                                <div class="h-8 w-full flex">
                                    <span class=" w-1/2">Started Date </span>
                                    <span class=" w-1/2 text-left">{{ auth()->user()->created_at->format('d M Y')
                                        }}</span>
                                </div>

                                <div class="h-8 w-full flex">
                                    <span class=" w-1/2">Expires at</span>
                                    <span class=" w-1/2 text-left">2022-09-01</span>
                                </div>

                            </li>
                        </ul>
                    </div>
                    <!-- End of profile card -->
                    <div class="my-4 h-screen">&nbsp;</div>
                    <!-- Friends card -->

                    <!-- End of friends card -->
                </div>
                <!-- Right Side -->
                <div class="w-full lg:w-9/12 mx-2 h-64">
                    <div class="w-full ">
                        @livewire('profile')
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>