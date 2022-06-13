<div>
    <div class="border-b border-gray-200 dark:border-gray-700 mx-10" x-data>

        {{-- progress bar --}}
        <div class="relative pt-0 mx-0 border">
            <div class="flex mb-2 items-center justify-between">
                <div>
                    <span
                        class="text-2xl w-44 border font-bold inline-block py-1 px-2 uppercase rounded-full text-purple-400 ">
                        {{$this->currentstepTitle}}
                    </span>
                    <span class="text-xl font-semibold inline-block text-purple-400">
                        {{$this->currentStep+1}}/9
                    </span>
                </div>
            </div>
            <div class=" h-1 mx-10 mb-4 text-xs flex  rounded bg-pink-200">
                <div style="width:{{($currentStep * 12.5) +6.25}}%;transition:0.3s"
                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-400">
                </div>
                <span class="bg-purple-400 border-0 w-3 h-3 -mt-1 rounded-full">

                </span>
            </div>
        </div>

        <ul
            class="mx-10 border flex w-full flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(0)" class="{{$currentStep == 0 ? " flex flex-col p-4 text-purple-600 rounded-t-lg
                    active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "flex flex-col p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 dark:hover:text-gray-300 group"
                    }} text-center w-full ">
                    <svg class=" {{$currentStep==0 ? "w-8 h-8 text-purple-500" : "w-5 h-5 text-gray-400" }}
                    transition-all group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300 mx-auto
                    border" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"></path>
                    </svg>
                    <span class="w-full">Basic</span>
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(1)" href="#" class="{{$currentStep == 1  ? " flex flex-col p-4 text-purple-600
                    rounded-t-lg active dark:text-purple-500 dark:border-purple-500 group font-bold " : " flex flex-col
                    p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 dark:hover:text-gray-300
                    group"}}" aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" class="{{$currentStep == 1 ? " w-8 h-8 text-purple-500"
                        : "w-5 h-5 text-gray-400" }} transition-all group-hover:text-gray-500 dark:text-gray-500
                        dark:group-hover:text-gray-300 mx-auto border" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>
                    Location

                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(2)" class="{{$currentStep == 2  ? " flex flex-col p-4 text-purple-600
                    rounded-t-lg active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "flex flex-col p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 dark:hover:text-gray-300 group"
                    }}">
                    <svg class="{{$currentStep == 2 ? " w-8 h-8 text-purple-500" : "w-5 h-5 text-gray-400" }}
                        transition-all group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300
                        mx-auto border" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                        </path>
                    </svg>

                    Facilities
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(3)" class="{{$currentStep == 3  ? " flex flex-col p-4 text-purple-600
                    rounded-t-lg active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "flex flex-col p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 dark:hover:text-gray-300 group"
                    }}">
                    <svg class="{{$currentStep == 3 ? " w-8 h-8 text-purple-500" : "w-5 h-5 text-gray-400" }}
                        transition-all group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300
                        mx-auto border" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>


                    Photos
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(4)" class="{{$currentStep == 4  ? " flex flex-col p-4 text-purple-600
                    rounded-t-lg active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "flex flex-col p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 dark:hover:text-gray-300 group"
                    }}"><svg class="{{$currentStep == 4 ? " w-8 h-8 text-purple-500" : "w-5 h-5 text-gray-400" }}
                        transition-all group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300
                        mx-auto border" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>Terms
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(5)" class="{{$currentStep == 5 ? " flex flex-col p-4 text-purple-600 rounded-t-lg
                    active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "flex flex-col p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 dark:hover:text-gray-300 group"
                    }} text-center w-full"> <svg class="{{$currentStep == 5 ? " w-8 h-8 text-purple-500"
                        : "w-5 h-5 text-gray-400" }} transition-all group-hover:text-gray-500 dark:text-gray-500
                        dark:group-hover:text-gray-300 mx-auto border" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                        </path>
                    </svg>Description
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(6)" class="{{$currentStep == 6 ? " flex flex-col p-4 text-purple-600 rounded-t-lg
                    active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "flex flex-col p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 dark:hover:text-gray-300 group"
                    }} text-center w-full">
                    <svg class="{{$currentStep == 6 ? " w-8 h-8 text-purple-500" : "w-5 h-5 text-gray-400" }}
                        transition-all w-5 h-5 group-hover:text-gray-500 dark:text-gray-500
                        dark:group-hover:text-gray-300 mx-auto border" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd"></path>
                    </svg>Rooms
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(7)" class="{{$currentStep == 7 ? " flex flex-col p-4 text-purple-600 rounded-t-lg
                    active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "flex flex-col p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 dark:hover:text-gray-300 group"
                    }} text-center w-full">
                    <svg class="{{$currentStep == 7 ? " w-8 h-8 text-purple-500" : "w-5 h-5 text-gray-400" }}
                        transition-all w-5 h-5 group-hover:text-gray-500 dark:text-gray-500
                        dark:group-hover:text-gray-300 mx-auto border" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd"></path>
                    </svg>Last one
                </a>
            </li>
        </ul>
        <form wire:submit.prevent="submitBasic" class="w-full h-[60vh] min-h-[60vh]">
            <div x-show="$wire.currentStep == 0" class="container flex" x-transition.delay.100ms x-transition.opacity>
                {{-- LEFT COL --}}
                <div class="w-1/2 border p-5 flex-col">

                    {{-- Name --}}
                    <div class="w-full md:w-1/2 px-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="grid-name">
                            Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                            id="grid-name" type="text" placeholder="Venue Name" wire:model="name">
                        @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- E-mail --}}
                    <div class="w-full md:w-1/2 px-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="grid-email">
                            E-mail
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('email') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                            id="grid-email" type="email" placeholder="email@venue.com" wire:model="email">
                        @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- phone --}}
                    <div class="w-full md:w-1/2 px-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="grid-phone">
                            Phone
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('phone') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                            id="grid-phone" type="text" placeholder="+216 71 000 000" wire:model="phone">
                        @error('phone')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                {{-- RIGHT COL --}}
                <div class="w-1/2 border p-5 ">
                    <div class="flex flex-col w-full">
                        {{-- form element here --}}
                        <div class="w-full flex-col flex p-3">
                            <div class="w-1/2 px-4 mb-6 ">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="type">
                                    Categorie
                                </label>
                                <select id="type" wire:model="venue_categorie"
                                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-4 py-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($categories as $category)
                                    <option class="uppercase" value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                                @error('venue_categorie')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div x-data="
                                {
                                    rating: 0,
                                    hoverRating: 0,
                                    ratings: [{'amount': 1, 'label':'Terrible'}, {'amount': 2, 'label':'Bad'}, {'amount': 3, 'label':'Okay'}, {'amount': 4, 'label':'Good'}, {'amount': 5, 'label':'Great'}],
                                    rate(amount) {
                                        if (this.rating == amount) {
                                    this.rating = 0;
                                }
                                        else this.rating = amount;
                                    },
                                currentLabel() {
                                let r = this.rating;
                                if (this.hoverRating != this.rating) r = this.hoverRating;
                                let i = this.ratings.findIndex(e => e.amount == r);
                                if (i >=0) {return this.ratings[i].label;} else {return ''};     
                                }
                                }
                                " class="w-1/2  mx-4 py-2 flex flex-col">
                                <div class="block tracking-wide text-gray-700 text-xs font-bold mb-2 uppercase">Rating
                                </div>
                                <div class="flex space-x-0 bg-gray-100">
                                    <template x-for="(star, index) in ratings" :key="index">
                                        <button @click="rate(star.amount)" @mouseover="hoverRating = star.amount"
                                            @mouseleave="hoverRating = rating" aria-hidden="true" :title="star.label"
                                            class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-8  m-0 cursor-pointer"
                                            :class="{'text-gray-600': hoverRating >= star.amount, 'text-yellow-400': rating >= star.amount && hoverRating >= star.amount}">
                                            <svg class="w-15 transition duration-150 "
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </button>

                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div x-show="$wire.currentStep == 1" class="container flex" x-transition.delay.100ms x-transition.opacity>
                <div class="w-1/2 border p-5">
                    inputs
                </div>
                <div class="w-1/2 border p-5">
                    <div class="h-52 w-full flex border justify-center  bg-indigo-300">
                        <span class="my-auto animate-pulse">Google map goes here</span>
                    </div>

                </div>
            </div>
            <div class="w-full p-3 border flex ">
                <button x-bind:disabled="!@this.basicValid" type="submit" class="transitons-all duration-150 mx-auto bg-indigo-300 hover:bg-indigo-400 text-indigo-800 font-bold py-3 px-5 rounded inline-flex items-center
            disabled:bg-slate-100 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none ">Next</button>
            </div>
        </form>

    </div>
    <div class="w-full flex justify-between px-10 py-4">
        <button x-bind:disabled="@this.currentStep == 0" wire:click="setStep(@this.currentStep-1)" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 px-5 rounded inline-flex items-center
    disabled:bg-slate-100 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <span>Previous </span>

        </button>
        <button x-bind:disabled="@this.currentStep == 8" wire:click="setStep(@this.currentStep+1)" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 px-5 rounded inline-flex items-center
    disabled:bg-slate-100 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none ">
            <span>Next </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
</div>