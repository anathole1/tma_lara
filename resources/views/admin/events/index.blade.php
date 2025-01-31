<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('events.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Event</a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Author
                </th>
                <th scope="col" class="px-6 py-3">
                    Summary
                </th>
               
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($events as $event)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$event->title}}
                </th>
                <td class="px-6 py-4">
                   {{$event->user->name}}
                </td>
                
                <td class="px-6 py-4">
                    <img src="{{asset('/images/'.$event->image)}}" alt="" class="w-12 h-12 rounded-full">
                </td>
                <td class="px-6 py-4">
                    {{-- <td class="border-b border-slate-100 dark:border-slate-700 pl-2 text-slate-500 dark:text-slate-400"> --}}
                        <!-- Link to edit task -->
                        <a href="{{ route('events.edit', $event->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDIT</a>
                        <!-- Form to delete task -->
                        <form method="post" action="{{ route('events.destroy', $event->id) }}" class="inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md h-[35px] relative top-[1px]">DELETE</button>
                        </form>
                    {{-- </td> --}}
                </td>

            </tr>
            @empty
            <tr>
                <td colspan="5">There are no data.</td>
            </tr>
            @endforelse
            

        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
