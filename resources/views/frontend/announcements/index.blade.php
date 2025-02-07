@extends('home')
@section('home_content')
 <div class="pt-8 bg-gray-50">
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-[#17A2B8]">Publicatioons</h2>
          <p class="mt-4 text-gray-600">Vacancies and Publications</p>
        </div>
               
          <div  class="bg-white rounded-lg shadow-lg overflow-hidden">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs bg-[#17A2B8] text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Due Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Download
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
                    <a href="{{asset('files/'.$announcement->files)}}" target="_blank"><img src="{{asset('images/down.png')}}" alt="Download" class="w-8 h-8"> </a>
                </td>

            </tr>
            @empty
            <tr>
            <td colspan="3" class="text-xl text-red-500 text-center py-6">No publication available at moment</td>
            </tr>
            @endforelse
        </tbody>
            </table>
          </div>
          
        </div>
    </section>
  </div>
@endsection