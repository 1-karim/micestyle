<div class="relative overflow-x-auto shadow-md sm:rounded-lg"  x-data="{ showModal: @entangle('editForm')}"
x-on:keydown.escape="showModal = false">
    <div class="p-4">
        <label for="table-search" class="sr-only">Search</label>
        
        <div class="flex justify-center flex-col py-2">
            <div class=" mx-auto relative text-gray-600 focus-within:text-gray-400 my-1 w-full md:1/3 sm:w-1/2 flex">
                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
    
                </span>
                <input type="search" name="q" wire:model="search"
                    class="border  border-gray-100 w-full py-3 text-sm text-white bg-gray-50 border-gray-300 rounded-lg pl-10 focus:outline-none focus:bg-white focus:text-gray-900"
                    placeholder="Search All" autocomplete="off">
    
            </div>
            <span
                class=" text-gray-500 text-xs font-bold mx-auto relative text-gray-600 focus-within:text-gray-400 my-1 w-full md:1/3 sm:w-1/2 flex">{{count($users)}}
                Results.</span>
        </div>
    </div>



    <table class=" my-2 border shadow rounded-xl  overflow-hidden max-w-full lg:w-[60vw] mx-auto">
        <thead>
            <tr>
                {{-- id --}}
                <th
                    class="hidden pl-6 py-3 text-xs font-medium leading-4 tracking-wider
                text-left text-gray-500 uppercase border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300 bg-gray-50 dark:bg-slate-600 dark:text-gray-300">
                    <input class="mr-2 rounded h-5 w-5" type="checkbox" wire:model="selectAll">
                </th>
                
                {{-- username --}}
                <th
                    class="px-3 py-3 max-w-24  text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300 bg-gray-50 dark:bg-slate-600 dark:text-gray-300">
                    name
                </th>

                {{-- SOLDE --}}
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-gray-500 uppercase border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300 bg-gray-50 dark:bg-slate-600 dark:text-gray-300">
                    e-mail
                </th>
                {{-- Venue(s) --}}
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-gray-500 uppercase border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300 bg-gray-50 dark:bg-slate-600 dark:text-gray-300">
                    Venues
                </th>

               
                

                {{-- Edit --}}
                <th
                    class="w-14 px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-gray-500 uppercase border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300 bg-gray-50 dark:bg-slate-600 dark:text-gray-300  hidden lg:table-cell">
                    Edit
                </th>

                {{-- Delete --}}
                <th
                    class=" max-w-20 px-3 text-center py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300 bg-gray-50 dark:bg-slate-600 dark:text-gray-300  hidden lg:table-cell">
                    Delete
                </th>

                {{-- Option --}}
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300 bg-gray-50 dark:bg-slate-600 dark:text-gray-300 table-cell lg:hidden">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="bg-white ">

            {{-- LIVE DATA --}}
            @if(sizeof($users))
            @foreach($users as $user)
            <tr>
                <td
                    class="hidden px-3  py-4 whitespace-no-wrap border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300">
                    <input class="rounded h-4 w-4 " type="checkbox" wire:model="selectedUsers" value="{{$user->id}}">
                    <span class="text-xs">{{$user->id}}</span>
                </td>
                {{-- USERNAME --}}
                <td
                    class="pl-2 py-4 whitespace-no-wrap border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300">
                    <div class="flex items-center">

                        <div class="ml-2">
                            <div class="text-sm font-medium leading-5 text-gray-900">
                                {{ $user->name }}
                            </div>
                        </div>
                    </div>
                </td>

                {{-- solde --}}
                <td
                    class="px-3 w-18  py-4 whitespace-no-wrap border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300">
                    <div class="text-sm leading-5 text-gray-500 text-center ">{{$user->email}}
                        
                    </div>
                </td>
                
                {{-- out --}}
                <td
                    class="px-3 w-18  py-4 whitespace-no-wrap border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300">
                    <div class="text-sm leading-5 text-gray-500 text-center ">Plaza hotel
                        
                    </div>
                </td>

                {{-- Edit --}}
                <td
                    class="w-14 text-center   px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300  hidden lg:table-cell">
                    <button wire:click="editUser({{ $user->id }})" x-on:click="showModal = true" class="rounded hover:border
                            h-8 w-8 text-center border-red-400 border-dotted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </button>
                </td>
                {{-- Delete --}}
                <td
                    class="max-w-20 w-20 px-6 py-2 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300  hidden lg:table-cell">
                    <a wire:click.prevent="delete({{ $user->id }})"
                        onclick="confirm('delete {{ $user->name }}?') || event.stopImmediatePropagation()" class="rounded hover:border
                                        h-8 w-8 text-center border-red-400 border-don tted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400 mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </a>
                </td>
                {{-- option --}}
                <td x-data="{popOver: false }"
                    class=" max-w-20 px-6 py-2 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200 dark:bg-slate-500 dark:text-gray-300  table-cell lg:hidden">
                    <button @click="popOver = !popOver"
                        class="rounded mx-auto h-8 w-8 text-center hover:text-purple-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <ul x-show="popOver" x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in transition-slow"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                        @click.away="popOver = false"
                        class="bg-white shadow rounded-sm absolute mt-2 list w-48 z-40 text-sm uppercase font-medium -ml-32"
                        x-cloak>
                        <li>
                            <a class="block px-2 py-2 hover:bg-teal-100 rounded-t-sm" href="#">Show</a>
                        </li>
                        <li>
                            <a class="block px-2 py-2 hover:bg-teal-100" wire:click="editUser({{ $user->id }})"
                                x-on:click="showModal = true">Edit</a>
                        </li>
                        <li>
                            <a class="block px-2 py-2 bg-red-100 hover:bg-red-600 hover:text-white rounded-b-sm"
                                wire:click.prevent="delete({{ $user->id }})"
                                onclick="confirm('delete {{ $user->name }}?') || event.stopImmediatePropagation()">Delete</a>
                        </li>
                    </ul>
                </td>
            </tr>
            @endforeach

            @else
            {{-- EMPTY ROW --}}
            <tr class="text-center flex h-20 w-48">
                <td class="h-20 py-5 text-lg text-gray-600 mx-auto absolute border border-red-400">No Shops </td>
            </tr>
            @endif
        </tbody>
    </table>


    <!-- Modal  cloack -->
    <div x-show="showModal"
        class="fixed w-screen  h-[110vh]  sm:mb[-10vh] bg-slate-900 dark:bg-black left-0 dark:bg-opacity-40 bg-opacity-50 -top-20 z-50 pt-[10vh] flex"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-100"
        x-transition:leave-start="opacity-100 " x-transition:leave-end="opacity-0 ">
    </div>

    <!-- Edit user Modal -->
    <form wire:submit.prevent="submit" method="post"
        class="bg-white  w-screen left-[2.5vw] max-h-screen   max-w-[50vw] m-auto fixed z-50 top-1  md:top-10  md:left-1/4 rounded-3xl border-gray-100 text-left shadow-lg"
        x-show="showModal" x-on:click.away="showModal = false" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="ease-in duration-100" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90" x-cloak>

        <!--Title-->
        <div class="flex justify-between items-center p-6 pb-5 bg-gray-100 dark:bg-slate-900 rounded-t-3xl ">
            <p class="text-2xl  text-slate-800 dark:text-slate-300">Edit {{ $this->editableUser['name']?
                $this->editableUser['name'] : '' }}</p>
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
        <div class="w-full flex bg-gray-100  dark:border-none dark:bg-slate-900">

            {{-- <span
                class="px-3 pt-2 text-center transition-colors cursor-pointer border-b-2 border-blue-500 dark:border-slate-300 text-blue-500 dark:text-slate-300 text-lg pb-3 w-1/3 font-semibold">
                Tab 1
            </span> --}}
            {{-- <span
                class="pr-3 border-b-gray-100 text-center transition-colors cursor-pointer border-b-2 hover:border-blue-500 hover:text-blue-500 text-lg pb-3 w-1/2 font-semibold">Tab
                2</span> --}}
        </div>
        <!-- content -->
        <div class="flex w-full p-4  max-h-[80vh] overflow-y-scroll">

            {{-- ACCORDION --}}

            <div class="bg-white w-full  mx-auto  overflow-hidden" x-data="{selected: 0 }">
                <ul class="rounded-lg border border-gray-200 overflow-hidden">

                    <li class="relative border-b">

                        <button type="button"
                            class="w-full px-3 flex justify-between py-3 text-left bg-gray-50 text-slate-700"
                            @click="selected !== 1 ? selected = 1 : selected = null">
                            <div class="flex ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>
                                    Account info
                                </span>

                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" :class="selected == 1 ? 'rotate-180' : ''"
                                class="h-5 w-5 transition-all " fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 " style=""
                            x-ref="container1"
                            x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">

                            <div wire:loading.remove class="py-2 w-full  flex-col">

                                {{-- ROW 1 --}}
                                <div class="w-full flex flex-col md:flex-row ">

                                    {{-- Username --}}
                                    <div class="w-full lg:w-1/2 flex-col px-3 pb-5">
                                        {{-- LABEL --}}
                                        <div class="w-full flex ">
                                            <div
                                                class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">
                                                name</div>
                                        </div>
                                        {{-- INPUT --}}
                                        <div class="w-full flex flex-col ">
                                            <input
                                                class="w-full h-18 dark:bg-slate-600 dark:border-0 dark:text-gray-300 rounded-lg  border-none bg-gray-100 border border-white @error('editableUser.username') border-red-400 @enderror"
                                                type="text" wire:model.defer="editableUser.name"
                                                placeholder="{{ $this->editablePlaceholder['name'] }}">

                                            @error('editableUser.name')
                                            <span class="error absolute mt-10 text-red-400 text-xs">{{ $message
                                                }}</span>
                                            @enderror
                                        </div>
                                    </div>l

                                    {{-- EMAIL --}}
                                    <div class="w-full lg:w-1/2 flex-col px-3 pb-5">
                                        {{-- LABEL --}}
                                        <div class="w-full  flex">
                                            <div class="w-1/3 font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">
                                                Email
                                            </div>
                                        </div>
                                        {{-- INPUT --}}
                                        <div class="w-full flex flex-col">

                                            <input name="name"
                                                class="dark:bg-slate-600 dark:border-0 dark:text-gray-300 w-full h-18 rounded-lg  bg-gray-100 border border-white @error('editableUser.email') border-red-400 @enderror"
                                                type="text" wire:model.defer="editableUser.email"
                                                placeholder="{{ $this->editablePlaceholder['email'] }}">


                                            @error('editableUser.email')
                                            <span class="error absolute mt-10   text-red-400 text-xs">{{ $message
                                                }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                {{-- ROW 2 --}}
                                <div class="w-full flex flex-col md:flex-row ">

                                    {{-- password --}}
                                    <div class="w-full lg:w-1/2 flex-col px-3 pb-5">
                                        {{-- LABEL --}}
                                        <div class="w-full lg:w-1/3 flex ">
                                            <div
                                                class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">
                                                new password
                                            </div>
                                        </div>
                                        {{-- INPUT --}}
                                        <div class="w-full flex flex-col  ">
                                            <input
                                                class="w-full dark:bg-slate-600 dark:border-0 dark:text-gray-300 h-18 rounded-lg border-none bg-gray-100 border border-white @error('editableUser.password') border-red-400 @enderror"
                                                type="password" wire:model.defer="editableUser.password" placeholder="">

                                            @error('editableUser.password')
                                            <span class=" error absolute mt-10 text-red-400 text-xs  ">{{ $message
                                                }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                {{-- ROW 3 --}}
                                <div class="w-full flex flex-col md:flex-row">

                                    {{-- phone --}}
                                    <div class="w-full lg:w-1/2 flex-col px-3 pb-5">
                                        {{-- LABEL --}}
                                        <div class="w-full lg:w-1/3 flex ">
                                            <div
                                                class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1 ">
                                                phone
                                            </div>
                                        </div>
                                        {{-- INPUT --}}
                                        <div class="w-full flex flex-col ">
                                            <input
                                                class="w-full dark:bg-slate-600 dark:border-0 dark:text-gray-300 h-18 rounded-lg border-none bg-gray-100 border border-white @error('editableUser.phone') border-red-400 @enderror"
                                                type="text" 
                                                {{-- wire:model.defer="editableUser.phone"
                                                placeholder="{{ $this->editablePlaceholder['phone'] }}" --}}
                                                >

                                            @error('editableUser.phone')
                                            <span class="error absolute mt-10   text-red-400 text-xs">{{ $message
                                                }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                 
                                </div>

                                {{-- ROW 4 --}}
                                <div class="w-full flex flex-col md:flex-row">
                                    {{-- address --}}
                                    <div class="w-full flex-col px-3 pb-5">
                                        {{-- LABEL --}}
                                        <div class="w-full flex">
                                            <div class="w-full font-semibold text-gray-500 text-xs h-5 capitalize pl-1">
                                                address
                                            </div>
                                        </div>
                           
                                    </div>
                                </div>

                            </div>
                            {{-- FORM SKELETON --}}
                            <div wire:loading class="py-2 w-full  flex-col">

                                {{-- ROW 1 --}}
                                <div class="w-full flex flex-col md:flex-row  py-5 ">

                                    {{-- name --}}
                                    <div class="w-full lg:w-1/2 my-1  px-3 rounded-lg">
                                        <div class="rounded-lg bg-gray-100 h-3 mb-1 w-10 animate-pulse">&nbsp;
                                        </div>
                                        <div class="w-full rounded-lg bg-gray-100 h-10 animate-pulse">&nbsp;
                                        </div>

                                    </div>

                                    {{-- EMAIL --}}
                                    <div class="w-full lg:w-1/2 my-1  px-3 rounded-lg">
                                        <div class="rounded-lg bg-gray-100 h-3 mb-1 w-10 animate-pulse">&nbsp;
                                        </div>
                                        <div class="w-full rounded-lg bg-gray-100 h-10 animate-pulse">&nbsp;
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
                    </li>

                    

                


                    


                </ul>
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
    <!--/Modal -->




{{-- CLEAN TABLE --}}
    {{-- <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3">
                    Venues
                </th>
                <th scope="col" class="px-6 py-3">
                    Plan
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b   hover:bg-gray-50 ">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Sliver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white border-b  hover:bg-gray-50">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-2" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                    Kamel touati
                </th>
                <td class="px-6 py-4">
                    kamel@mail.com
                </td>
                <td class="px-6 py-4">
                    Plaza Hotel
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white  hover:bg-gray-50 ">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-3" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                </td>
            </tr>
        </tbody>
    </table> --}}









</div>
