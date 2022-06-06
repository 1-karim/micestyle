<div class="border p-5">
    <div class="p-2 ">
        <button class="bg-white  hidden hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
        wire:click="add">
            Add 10
        </button>
        <button wire:click.prevent="deleteSelected"
            onclick="confirm('are you sure?') || event.stopImmediatePropagation()"
            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
            Delete Selected
        </button>
        <span class="">{{count($venues)}} Results.</span>
    </div>
    <div wire:offline class="border border-red-500 text-red-500">
        you're Offline
    </div>
    <table class="min-w-full w-full ">
        <thead>
            <tr>
                {{-- id --}}
                <th class="sticky pl-6 py-3 text-xs font-medium leading-4 tracking-wider  
                text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    <input class="mr-2" type="checkbox" wire:model="selectAll">
                </th>
                {{-- name --}}
                <th
                    class="sticky px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Name
                </th>
                {{-- user --}}
                <th
                    class="sticky px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Email
                </th>
                <th
                    class="sticky px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    User
                </th>
                <th
                    class="sticky px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    phone
                </th>
                <th
                    class="sticky px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Edit
                </th>
                <th
                    class="sticky px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($venues as $venue)
            <tr>
                <td class="pl-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <input type="checkbox" wire:model="selectedVenues" value="{{$venue->id}}">
                    <span>{{$venue->id}}</span>
                </td>

                {{-- NAME --}}
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 w-10 h-10">
                            <div class="w-10 h-10 rounded-full">
                                <x-application-logo />
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium leading-5 text-gray-900">
                                {{ $venue->name }}
                            </div>
                        </div>
                    </div>
                </td>
                {{-- email --}}
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="text-sm leading-5 text-gray-500">{{$venue->email}}</div>
                </td>
                {{-- user --}}
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <span
                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Change
                        me</span>
                </td>
                {{-- phone --}}
                <td class="px-6 py-4 max-h-10 border-b border-gray-200">

                    {{$venue->phone}}
                </td>
                <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                    <button x-data="{}" class="rounded hover:border
                    h-8 w-8 text-center border-red-400 border-dotted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </button>
                </td>
                <td class="px-6 py-2 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                    <a wire:click.prevent="delete({{ $venue->id }})"
                        onclick="confirm('delete {{ $venue->name }}?') || event.stopImmediatePropagation()" class="rounded hover:border
                                h-8 w-8 text-center border-red-400 border-don tted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400 mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>