<div>
    <div class="border-b border-gray-200 dark:border-gray-700 mx-10" x-data>

        {{-- progress bar --}}
        <div class="relative pt-1 mx-0">
            <div class="flex mb-2 items-center justify-between">
                <div>
                    <span class="text-2xl font-bold inline-block py-1 px-2 uppercase rounded-full text-purple-400 ">
                        {{$this->currentstepTitle}}
                    </span>
                    <span class="text-xl font-semibold inline-block text-purple-400">
                        {{$this->currentStep+1}}/9
                    </span>
                </div>
            </div>
            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-pink-200">
                <div style="width:{{$currentStep * 12.5 + 6}}%;transition:0.3s"
                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-400">
                </div>
            </div>
        </div>

        <ul class="flex w-full flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(0)" class="{{$currentStep == 0 ? " inline-flex p-4 text-purple-600 rounded-t-lg
                    border-b-2 border-purple-600 active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group"
                    }} text-center w-full">
                    <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Basic
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(1)" href="#" class="{{$currentStep == 1  ? " inline-flex p-4 text-purple-600
                    rounded-t-lg border-b-2 border-purple-600 active dark:text-purple-500 dark:border-purple-500 group
                    font-bold " : " inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600
                    hover:border-gray-300 dark:hover:text-gray-300 group"}}" aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="mr-2 h-5 w-5  text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>
                    Location

                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(2)" class="{{$currentStep == 2  ? " inline-flex p-4 text-purple-600 rounded-t-lg
                    border-b-2 border-purple-600 active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group"
                    }}">
                    <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                        </path>
                    </svg>

                    Facilities
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(3)" class="{{$currentStep == 3  ? " inline-flex p-4 text-purple-600 rounded-t-lg
                    border-b-2 border-purple-600 active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group"
                    }}">
                    <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                        </path>
                    </svg>Photos
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(4)" class="{{$currentStep == 4  ? " inline-flex p-4 text-purple-600 rounded-t-lg
                    border-b-2 border-purple-600 active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group"
                    }}"><svg
                        class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                        </path>
                    </svg>Terms
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(5)" class="{{$currentStep == 5 ? " inline-flex p-4 text-purple-600 rounded-t-lg
                    border-b-2 border-purple-600 active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group"
                    }} text-center w-full"> <svg
                        class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                        </path>
                    </svg>Description
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a wire:click="setStep(6)" class="{{$currentStep == 6 ? " inline-flex p-4 text-purple-600 rounded-t-lg
                    border-b-2 border-purple-600 active dark:text-purple-500 dark:border-purple-500 group font-bold"
                    : "inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group"
                    }} text-center w-full">
                    <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd"></path>
                    </svg>Rooms
                </a>
            </li>
            <li class="mr-2 flex flex-grow flex-col">

                <a
                    class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
            </li>
        </ul>
        <div class="w-full h-[50vh]">
            <div x-show="$wire.currentStep == 0" class="container flex" x-transition.delay.100ms
                x-transition.scale.origin.top>
                {{-- LEFT COL --}}
                <div class="w-1/2 border p-5 flex-col">

                    {{-- Name --}}
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="Venue Name">
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>

                    {{-- E-mail --}}
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            E-mail
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="email" placeholder="Jane">
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>



                </div>
                {{-- RIGHT COL --}}
                <div class="w-1/2 border p-5 ">
                    <div class="flex">
                        {{-- form element here --}}
                        <div class="w-full  md:w-1/2 px-4 mb-6 md:mb-0">
                            <label for="countries"
                                class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Venue type
                            </label>
                            <select id="countries"
                                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-4 py-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a Type</option>
                                <option value="US">Hotel</option>
                                <option value="CA">Co-working space</option>
                                <option value="FR">Wedding Venue</option>
                                <option value="DE">Other</option>
                            </select>
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
	" >
  <div class="flex space-x-0 bg-gray-100">
	<template x-for="(star, index) in ratings" :key="index">
		<button @click="rate(star.amount)" @mouseover="hoverRating = star.amount" @mouseleave="hoverRating = rating"
			aria-hidden="true"
      :title="star.label"
			class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-12 m-0 cursor-pointer"
			:class="{'text-gray-600': hoverRating >= star.amount, 'text-yellow-400': rating >= star.amount && hoverRating >= star.amount}">
			<svg class="w-15 transition duration-150" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
      </svg>
		</button>

	</template>
  </div>
	<div class="p-2">
    <template x-if="rating || hoverRating">
		  <p x-text="currentLabel()"></p>
    </template>
    <template x-if="!rating && !hoverRating">
		  <p>Please Rate!</p>
    </template>
	</div>

                    </div>
                    {{-- form element here --}}
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            First Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="Jane">
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col" x-show="$wire.currentStep == 1" class="container flex" x-transition.delay.100ms
                x-transition.scale.origin.top>
                <h2 class="text-xl w-full">Location</h2>
            </div>
            <div class="flex flex-col" x-show="$wire.currentStep == 2" class="container flex" x-transition.delay.100ms
                x-transition.scale.origin.top>
                <h2 class="text-xl w-full">Facilities</h2>
            </div>
        </div>

    </div>
    <div class="w-full flex justify-between px-10 py-4">
        <button x-bind:disabled="@this.currentStep == 0" wire:click="setStep(@this.currentStep-1)"
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 px-5 rounded inline-flex items-center
            disabled:bg-slate-100 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <span>Previous </span>

        </button>
        <button x-bind:disabled="@this.currentStep == 8" wire:click="setStep(@this.currentStep+1)"
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 px-5 rounded inline-flex items-center
            disabled:bg-slate-100 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none ">
            <span>Next </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
</div>