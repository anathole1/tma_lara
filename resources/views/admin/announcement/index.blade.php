<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Publications') }}
        </h2>
    </x-slot>

    <div class="py-12">
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @session('success')
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">{{$value}}</span> 
            </div>
          @endsession
            <a href="{{route('announcement.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="fa-solid fa-pen"></i>Add Publication</a>
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
                    Due Date
                </th>
                <th scope="col" class="px-6 py-3">
                    File
                </th>
               
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($announcements as $announcement)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$announcement->title}}
                </th>
                <td class="px-6 py-4">
                   {{$announcement->duedate}}
                </td>
                
                <td class="px-6 py-4">
                    <a href="{{asset('files/'.$announcement->files)}}" target="_blank" class="hover:text-green-600">{{$announcement->files}}</a>
                </td>
                <td class="px-6 py-4">
                    {{-- <td class="border-b border-slate-100 dark:border-slate-700 pl-2 text-slate-500 dark:text-slate-400"> --}}
                        <!-- Link to edit task -->
                        <a href="{{ route('announcement.edit', $announcement->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md"><i class="fa fa-pencil"></i> EDIT</a>
                        <!-- Form to delete task -->
                        <form method="post" action="{{ route('announcement.destroy', $announcement->id) }}" class="inline">
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
