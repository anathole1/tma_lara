<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       @session('success')
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">{{$value}}</span> 
            </div>
          @endsession
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 dark:text-gray-100"> 
                    
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Subject
                </th>
                <th scope="col" class="px-6 py-3">
                    Message
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $contact)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$contact->name}}
                </th>
                <td class="px-6 py-4">
                    {{$contact->email}}
                </td>
                <td class="px-6 py-4">
                    {{$contact->subject}}
                </td>
                <td class="px-6 py-4">
                    {!! $contact->message!!}
                </td>
                <td class="px-6 py-4">
                    {{-- <td class="border-b border-slate-100 dark:border-slate-700 pl-2 text-slate-500 dark:text-slate-400"> --}}
                        <!-- Link to edit task -->
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDIT</a>
                        <!-- Form to delete task -->
                        <form method="post" action="{{ route('contacts.destroy', $contact->id) }}" class="inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md h-[35px] relative top-[1px]">DELETE</button>
                        </form>
                    {{-- </td> --}}
                </td>

            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-xl"><span class="text-red-500"> There are no data.</span></td>
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
