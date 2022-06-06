<div x-data="{ form :  @this.form , showModal: @this.form}" x-on:keydown.escape="showModal = false"
    class="bg-white dark:bg-slate-800 p-2 px-3 shadow-sm">

    <div
        class="flex items-center px-2 justify-between font-semibold text-gray-900 leading-10 border-b dark:border-gray-500">
        <div class="w-2/3 flex">
            <span clas="flex w-1/5">
                <svg class="h-6 my-3 ml-3 mr-2 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </span>
            <span class="tracking-wide  text-xl font-semibold m-3 dark:text-gray-300"> Account info </span>

        </div>

        
            <span class="mr-0 px-4 py-1 border my-2 text-lg rounded bg-green-200 tracking-wider">
                <span class="hidden md:block">My Credit:</span>
                <b> {{ auth()->user()->credit }} </b>
                <span class="text-[12px]">dt</span>
            </span>
        
        
    </div>
    <div class="flex flex-col w-full px-4 py-4 dark:text-white ">
        <div class="w-full flex justify-end ">
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-1 flex justify-items-end"
            x-on:click="showModal = true">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-8 text-white m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
              </svg>
        </button>
        </div>
        <div class="w-full flex py-2 ">
            <span class="w-1/3 font-bold capitalize"> name </span>

            <span class="w-2/3" wire:model="profile.name">
                {{ $profile['name'] }}
            </span>
        </div>

        {{-- <div class="w-full flex py-2">

            <span class="w-1/3 font-bold capitalize"> tel </span>
            <span class="w-2/3" wire:model="profile.phone">
                {{ $profile['phone'] }}
            </span>

        </div> --}}

        <div class="w-full flex py-2">
            <span class="w-1/3 font-bold capitalize"> email </span>
            <span class="w-2/3" wire:model="profile.email">
                {{ $profile['email'] }}
            </span>
        </div>

        <div class="w-full flex py-2">
            <span class="w-1/3 font-bold capitalize"> address </span>
            <span class="w-2/3" wire:model="profile.address">
                {{ $profile['address'] }}
            </span>
        </div>

    </div>

    {{-- TOASTS --}}
    <div x-data="{toast : true}" class="fixed right-0 bottom-10 flex-col w-[400px]">

        @if (session()->has('info'))
        <div x-show.transition.opacity.in.duration.1500ms="toast"
            class=" my-3  alert flex flex-row items-center bg-blue-200 p-5 rounded border-b-2 border-blue-300">
            <div
                class="alert-icon flex items-center bg-blue-100 border-2 border-blue-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                <span class="text-blue-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="alert-content ml-4">
                <div class="alert-title font-semibold text-lg text-blue-800">
                    Success
                </div>
                <div class="alert-description text-sm text-blue-600">
                    {{ session('info') }}
                </div>
            </div>
        </div>
        @endif

        @if(session()->has('message'))
        <div class=" my-3 alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300">
            <div
                class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                <span class="text-green-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="alert-content ml-4">
                <div class="alert-title font-semibold text-lg text-green-800">
                    Success
                </div>
                <div class="alert-description text-sm text-green-600">
                    {{ session('message') }}
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Modal  cloack -->
    <div x-show="showModal"
        class="fixed w-screen  h-[110vh]  sm:mb[-10vh] bg-slate-900 dark:bg-black left-0 dark:bg-opacity-40 bg-opacity-50 -top-20 z-40 pt-[10vh] flex"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-100"
        x-transition:leave-start="opacity-100 " x-transition:leave-end="opacity-0 ">
    </div>
    <!-- Modal -->
    <form wire:submit.prevent="submit" method="post"
        class="bg-white dark:bg-slate-800 w-[95vw] left-[2.5vw]   max-w-[650px] m-auto fixed z-50 top-1  md:top-10  md:left-1/3 rounded-3xl shadow-lg border-gray-100 text-left shadow-lg"
        x-show="showModal" x-on:click.away="showModal = false" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="ease-in duration-100" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90" x-cloak
        >

        <!--Title-->
        <div class="flex justify-between items-center p-6 pb-5 bg-gray-100 dark:bg-slate-900 rounded-t-3xl ">
            <p class=" text-2xl font-bold text-slate-800 dark:text-slate-300">Edit My Profile</p>
            <div class="cursor-pointer z-50" @click="showModal = false">
                <svg class="fill-current text-black dark:text-slate-300" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                </svg>
            </div>
        </div>
        {{-- tabs --}}
        <div class="w-full flex bg-gray-100 border dark:border-none dark:bg-slate-900">
            
            {{-- <span
                class="px-3 pt-2 text-center transition-colors cursor-pointer border-b-2 border-blue-500 dark:border-slate-300 text-blue-500 dark:text-slate-300 text-lg pb-3 w-1/3 font-semibold">
                Tab 1
            </span> --}}
            {{-- <span
                class="pr-3 border-b-gray-100 text-center transition-colors cursor-pointer border-b-2 hover:border-blue-500 hover:text-blue-500 text-lg pb-3 w-1/2 font-semibold">Tab
                2</span> --}}
        </div>
        <!-- content -->
        <div class="flex w-full p-4  max-h-[60vh] overflow-y-scroll">
            <div class="py-2 w-full  flex-col">

                {{-- ROW 1 --}}
                <div class="w-full flex flex-col md:flex-row ">

                    {{-- name --}}
                    <div class="w-full lg:w-1/2 flex-col px-3 pb-5">
                        {{-- LABEL --}}
                        <div class="w-full flex ">
                            <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">name</div>
                        </div>
                        {{-- INPUT --}}
                        <div class="w-full flex flex-col ">
                            <input
                                class="w-full h-18 dark:bg-slate-600 dark:border-0 dark:text-gray-300 rounded-lg  border-none bg-gray-100 border border-white @error('profile.name') border-red-400 @enderror"
                                type="text" wire:model.defer="profile.name" placeholder="{{ $this->profile['name'] }}">

                            @error('profile.name')
                            <span class="error absolute mt-10 text-red-400 text-xs">{{ $message
                                }}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- EMAIL --}}
                    <div class="w-full lg:w-1/2 flex-col px-3 pb-5">
                        {{-- LABEL --}}
                        <div class="w-full  flex">
                            <div class="w-1/3 font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">Email</div>

                        </div>
                        {{-- INPUT --}}
                        <div class="w-full flex flex-col">

                            <input name="name"
                                class="dark:bg-slate-600 dark:border-0 dark:text-gray-300 w-full h-18 rounded-lg  bg-gray-100 border border-white @error('profile.email') border-red-400 @enderror"
                                type="text" wire:model.defer="profile.email"
                                placeholder="{{ $this->profile['email'] }}">


                            @error('profile.email')
                            <span class="error absolute mt-10   text-red-400 text-xs">{{ $message
                                }}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                {{-- ROW 2 --}}
                <div class="w-full flex flex-col md:flex-row">

                    {{-- password --}}
                    <div class="w-full lg:w-1/2 flex-col px-3  pb-5">
                        {{-- LABEL --}}
                        <div class="w-full lg:w-1/3 flex ">
                            <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">new password
                            </div>
                        </div>
                        {{-- INPUT --}}
                        <div class="w-full flex flex-col  ">
                            <input
                                class="w-full dark:bg-slate-600 dark:border-0 dark:text-gray-300 h-18 rounded-lg border-none bg-gray-100 border border-white @error('profile.password') border-red-400 @enderror"
                                type="password" wire:model.defer="profile.password" placeholder="">

                            @error('profile.password')
                            <span class=" error absolute mt-10 text-red-400 text-xs  ">{{ $message
                                }}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- confirm password --}}
                    {{-- <div class=" w-full lg:w-1/2 flex-col px-3"> --}}
                        {{-- LABEL --}}
                        {{-- <div class="w-full lg:w-full flex">
                            <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">confirm new
                                password
                            </div>
                        </div> --}}
                        {{-- INPUT --}}
                        {{-- <div class="w-full flex flex-col ">
                            <input
                                class="w-full dark:bg-slate-600 dark:border-0 dark:text-gray-300 h-18 rounded-lg  bg-gray-100  border border-white @error('profile.confirm_password') border-red-400 @enderror"
                                type="password" wire:model.defer="profile.confirm_password">

                            @error('profile.confirm_password')
                            <span class="error absolute mt-10   text-red-400 text-xs ">{{ $message
                                }}</span>
                            @enderror
                        </div> --}}
                        {{-- </div> --}}

                </div>

                {{-- ROW 3 --}}
                <div class="w-full flex flex-col md:flex-row">

                    {{-- phone --}}
                    <div class="w-full lg:w-1/2 flex-col px-3  pb-5">
                        {{-- LABEL --}}
                        <div class="w-full lg:w-1/3 flex ">
                            <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">phone
                            </div>
                        </div> 
                        {{-- INPUT --}}
                        <div class="w-full flex flex-col ">
                            <input
                                class="w-full dark:bg-slate-600 dark:border-0 dark:text-gray-300 h-18 rounded-lg border-none bg-gray-100 border border-white @error('profile.phone') border-red-400 @enderror"
                                type="text" wire:model.defer="profile.phone" 
                                placeholder="{{ $this->profile['phone'] }}">

                            @error('profile.phone')
                            <span class="error absolute mt-10   text-red-400 text-xs">{{ $message
                                }}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- gender --}}
                    <div class="w-full lg:w-1/2 flex-col px-3 hidden sm:block">
                        {{-- LABEL --
                        <div class="w-full lg:w-full flex">
                            <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1">gender
                            </div>
                        </div>}}
                        {{-- INPUT 
                        <div class="w-full flex flex-col">
                            <select
                                class="w-full h-18 dark:bg-slate-600 dark:border-0 dark:text-gray-300 rounded-lg  border-none bg-gray-100 border border-white">
                                <option value="m">M</option>
                                <option value="f">F</option>
                            </select>
                        </div>--}}
                    </div>

                </div>

                {{-- ROW 5 --}}
                <div class="w-full flex flex-col md:flex-row ">

                    {{-- address --}}
                    <div class="w-full flex-col px-3  pb-5">
                        {{-- LABEL --}}
                        <div class="w-full flex">
                            <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1">address
                            </div>
                        </div>
                        {{-- INPUT --}}
                        <div class="w-full flex flex-col ">
                            <input
                                class="w-full h-18 dark:bg-slate-600 dark:border-0 dark:text-gray-300 rounded-lg border-none bg-gray-100 border border-white @error('profile.address') border-red-400 @enderror"
                                type="text" wire:model.defer="profile.address"
                                placeholder="{{ $this->profile['address'] }}">

                            @error('profile.address')
                            <span class="error absolute mt-10 text-red-400 text-xs  ">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--Footer-->
        <div class="flex justify-end py-4 w-full border-t border-gray px-6">
            <button
                class="capitalize px-4 bg-transparent w-3/4 p-3 ml-1 rounded-lg bg-gray-200 hover:bg-gray-100 text-slate-800 mr-3"
                type="button">
                {{__('reset')}}
            </button>
            <button
                class="capitalize modal-close w-1/3 px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400 ml-2"
                type="submit"
                wire:   g.attr="disabled"
                >
                <svg wire:loading role="status" class="mr-2 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
                <span wire:loading.remove>{{__('save')}}</span>
            </button>


        </div>

    </form>
    <!--/Modal -->

    <!-- About Section -->
    <div class="bg-white dark:bg-slate-800 p-3 shadow-sm rounded-lg">

        <div class="text-gray-700">


        </div>
        <!-- End of about section -->
    </div>