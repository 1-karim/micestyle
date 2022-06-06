<div x-data="{OpenModal : @entangle('openModal')}" >
    <div class="ml-3 relative">
        <button type="button" x-on:click="OpenModal = true" 
            class=" bg-transparent border transition-colors bg-orange-400  hover:animate-pulse  dark:text-gray-300  font-bold py-2 px-4 rounded-full">add Venue
        </button>
    </div>
     <!-- Edit Modal -->
     <form wire:submit.prevent="submitNew" method="post" autocomplete="off"
     class="bg-white dark:bg-slate-800 w-[95vw] left-[2.5vw] max-h-screen  max-w-[650px] m-auto fixed z-50 top-1  md:top-10  md:left-1/3 rounded-3xl  border-gray-100 text-left shadow-lg"
     x-show="OpenModal" x-on:click.away="OpenModal = false" x-transition:enter="ease-out duration-300"
     x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
     x-transition:leave="ease-in duration-100" x-transition:leave-start="opacity-100 scale-100"
     x-transition:leave-end="opacity-0 scale-90" x-cloak>

     <!--Title-->
     <div class="flex justify-between items-center p-6 pb-5 bg-gray-100 dark:bg-slate-900 rounded-t-3xl ">
         <p class=" text-xl font-bold text-slate-800 dark:text-slate-300"> New Venue </p>
         <div class="cursor-pointer z-50" @click=" OpenModal = false ">
             <svg class="fill-current text-gray-500 dark:text-slate-300" xmlns="http://www.w3.org/2000/svg" width="24"
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
     <div class="flex w-full p-4  max-h-[85vh] overflow-y-scroll">

         <div wire:loading.remove class="py-2 w-full  flex-col">

             {{-- ROW 1 --}}
             <div class="w-full flex flex-col md:flex-row py-5 ">

                 {{-- Username --}}
                 <div class="w-full lg:w-1/2 flex-col px-3">
                     {{-- LABEL --}}
                     <div class="w-full flex ">
                         <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">name</div>
                     </div>
                     {{-- INPUT --}}
                     <div class="w-full flex flex-col ">
                         <input
                             class="w-full h-18 dark:bg-slate-600 dark:border-0 dark:text-gray-300 rounded-lg  border-none bg-gray-100 border border-white @error('newVenue.name') border-red-400 @enderror"
                             type="text" wire:model.defer="newVenue.name"
                             placeholder="new name">

                         @error('newVenue.name')
                         <span class="error absolute mt-10 text-red-400 text-xs">{{ $message
                             }}</span>
                         @enderror
                     </div>
                 </div>

                 {{-- EMAIL --}}
                 <div class="hidden w-full lg:w-1/2 flex-col px-3">
                     {{-- LABEL --}}
                     <div class="w-full  flex">
                         <div class="w-1/3 font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">Password</div>
                     </div>
                     {{-- INPUT --}}
                     <div class="w-full flex flex-col">
                         <input name="name"
                             class="dark:bg-slate-600 dark:border-0 dark:text-gray-300 w-full h-18 rounded-lg  bg-gray-100 border border-white @error('newVenue.email') border-red-400 @enderror"
                             type="text" wire:model.defer="newVenue.email" autocomplete="off"
                             placeholder="new e-mail">
                         @error('newVenue.email')
                         <span class="error absolute mt-10   text-red-400 text-xs">{{ $message
                             }}</span>
                         @enderror
                     </div>
                 </div>

             </div>

             {{-- ROW 1.1 --}}
             <div class="w-full flex flex-col md:flex-row py-5 ">

                {{-- assign to --}}
                <div class="w-full lg:w-1/2 flex-col px-3">
                    {{-- LABEL --}}
                    <div class="w-full flex ">
                        <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">Assigné a</div>
                    </div>
                    {{-- INPUT --}}
                    <div class="w-full flex flex-col ">
                        <select
                            class="w-full h-18 dark:bg-slate-600 dark:border-0 dark:text-gray-300 rounded-lg  border-none bg-gray-100 border border-white @error('newVenue.name') border-red-400 @enderror"
                             wire:model.defer="newVenue.owned_by">
                            <option selected="selected" value="{{auth()->id()}}">Moi-meme</option>
                            @if(Auth::user()->hasRole('superadministrator') && sizeof($admins))
                                @foreach($admins as $admin)
                                    <option value="{{$admin->id}}">{{ $admin->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        
                        @error('newVenue.owned_by')
                        <span class="error absolute mt-10 text-red-400 text-xs">{{ $message
                            }}</span>
                        @enderror
                    </div>
                </div>
            </div>
             {{-- ROW 2 --}}
             <div class="w-full flex flex-col md:flex-row py-5">
                 {{-- password --}}
                 <div class="w-full lg:w-1/2 flex-col px-3">
                     {{-- LABEL --}}
                     <div class="w-full lg:w-1/3 flex ">
                         <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">new password
                         </div>
                     </div>
                     {{-- INPUT --}}
                     <div class="w-full flex flex-col  ">
                         <input
                             class="w-full dark:bg-slate-600 dark:border-0 dark:text-gray-300 h-18 rounded-lg border-none bg-gray-100 border border-white @error('newVenue.password') border-red-400 @enderror"
                             type="password" wire:model.defer="newVenue.password" placeholder="">

                         @error('newVenue.password')
                         <span class=" error absolute mt-10 text-red-400 text-xs  ">{{ $message
                             }}</span>
                         @enderror
                     </div>
                 </div>

             </div>

             {{-- ROW 3 --}}
             <div class="w-full flex flex-col md:flex-row py-5">

                 {{-- phone --}}
                 {{-- <div class="w-full lg:w-1/2 flex-col px-3 ">
                    
                     <div class="w-full lg:w-1/3 flex ">
                         <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">phone
                         </div>
                     </div>
                     
                     <div class="w-full flex flex-col ">
                         <input
                             class="w-full dark:bg-slate-600 dark:border-0 dark:text-gray-300 h-18 rounded-lg border-none bg-gray-100 border border-white @error('newVenue.phone') border-red-400 @enderror"
                             type="text" wire:model.defer="newVenue.phone"
                             placeholder="{{ $this->newVenue['phone'] }}">

                         @error('newVenue.phone')
                         <span class="error absolute mt-10   text-red-400 text-xs">{{ $message
                             }}</span>
                         @enderror
                     </div>
                 </div> --}}

                 {{-- Credit --}}
                 <div class="w-full lg:w-1/2 flex-col px-3 ">
                     {{-- LABEL --}}
                     <div class="w-full lg:w-full flex">
                         <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1">Start Credit (Solde)
                         </div>
                     </div>
                     {{-- INPUT --}}
                     <div class="w-full flex flex-col">
                        <input
                        class="w-full dark:bg-slate-600 dark:border-0 dark:text-gray-300 h-18 rounded-lg border-none bg-gray-100 border border-white @error('newVenue.credit') border-red-400 @enderror"
                        type="text" wire:model.defer="newVenue.credit"
                        placeholder="0">

                     </div>
                 </div>

             </div>

             {{-- ROW 5 --}}
             <div class="w-full flex flex-col md:flex-row py-5">

                 {{-- address --}}
                 <div class="w-full flex-col px-3 ">
                     {{-- LABEL --}}
                     <div class="w-full flex">
                         <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1">address
                         </div>
                     </div>
                     {{-- INPUT --}}
                     <div class="w-full flex flex-col ">
                         <input
                             class="w-full h-18 dark:bg-slate-600 dark:border-0 dark:text-gray-300 rounded-lg border-none bg-gray-100 border border-white @error('newVenue.address') border-red-400 @enderror"
                             type="text" wire:model.defer="newVenue.address"
                             placeholder="{{ $this->newVenue['address'] }}">

                         @error('newVenue.address')
                         <span class="error absolute mt-10 text-red-400 text-xs  ">
                             {{ $message }}
                         </span>
                         @enderror
                     </div>
                 </div>
             </div>

         </div>

         {{-- FORM SKELETON --}}
         <div wire:loading class="py-2 w-full  flex-col">

             {{-- ROW 1 --}}
             <div class="w-full flex flex-col md:flex-row  py-5 ">

                 {{-- Name --}}
                 <div class="w-full lg:w-1/2 my-1  px-3 rounded-lg">
                     <div class="rounded-lg bg-gray-600 h-3 mb-1 w-10 animate-pulse">&nbsp;
                     </div>
                     <div class="w-full rounded-lg bg-gray-100 h-10 animate-pulse">&nbsp;
                     </div>
                 </div>

                 {{-- EMAIL --}}
                 <div class="w-full lg:w-1/2 my-1  px-3 rounded-lg">
                     <div class="rounded-lg bg-gray-100 h-3 mb-1 w-10 animate-pulse">
                         &nbsp;
                     </div>
                     <div class="w-full rounded-lg bg-gray-100 h-10 animate-pulse">
                         &nbsp;
                     </div>
                 </div>

             </div>

             {{-- ROW 2 --}}
             <div class="w-full flex flex-col md:flex-row py-5 ">

                 {{-- password --}}
                 <div class="w-full lg:w-1/2 flex-col px-3 ">
                     {{-- LABEL --}}
                     <div class="rounded-lg bg-gray-100 h-3 mb-1 w-10 animate-pulse">&nbsp;
                     </div>
                     <div class="w-full rounded-lg bg-gray-100 h-10 animate-pulse">&nbsp;
                     </div>
                 </div>
             </div>

             {{-- ROW 3 --}}
             <div class="w-full flex flex-col md:flex-row py-5">

                 {{-- phone --}}
                 <div class="w-full lg:w-1/2 flex-col px-3 ">
                     {{-- LABEL --}}
                     <div class="rounded-lg bg-gray-100 h-3 mb-1 w-10 animate-pulse">&nbsp;
                     </div>
                     <div class="w-full rounded-lg bg-gray-100 h-10 animate-pulse">&nbsp;
                     </div>
                 </div>



             </div>

             {{-- ROW 5 --}}
             <div class="w-full flex flex-col md:flex-row py-5">

                 {{-- address --}}
                 <div class="w-full flex-col px-3 ">
                     {{-- LABEL --}}
                     <div class="rounded-lg bg-gray-100 h-3 mb-1 w-10 animate-pulse">&nbsp;
                     </div>
                     <div class="w-full rounded-lg bg-gray-100 h-10 animate-pulse">&nbsp;
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
             type="submit" wire:loading.attr="disabled">
             <svg wire:loading role="status"
                 class="mr-2 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                 viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path
                     d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                     fill="currentColor" />
                 <path
                     d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                     fill="currentFill" />
             </svg>
             <span wire:loading.remove>{{__('save')}}</span>
         </button>
     </div>

 </form>


</div>
