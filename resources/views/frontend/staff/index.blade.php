@extends('home')
@section('home_content')
<div class="pt-8 bg-gray-50">
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-[#17A2B8]">Our Staff</h2>
          <p class="mt-4 text-gray-600">Meet our dedicated team of educators and administrators</p>
        </div>

        <!-- Category Navigation -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            @foreach ($categories as $cat)
                 <a href="{{ route('staff.filter', $cat) }}" 
               class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 ">
                {{ $cat }}
            </a>
          @endforeach
       
        </div>

        <!-- Staff Categories -->
        <div class="space-y-16">
               <h2 class="text-xl font-semibold mb-4 text-center">
        {{ isset($category) ? "Showing: $category Staff" : "All Staff" }}
        </h2>
                 
          <div 
               class="transition-all duration-300">
            {{-- <h3 class="text-2xl font-bold text-[#17A2B8] mb-8 text-center">{{ $category->name }}</h3> --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($staffs as $member)
              <div class="bg-white p-6 rounded-lg shadow-lg text-center transform transition-all duration-300 hover:scale-105">
                <img src="{{asset('images/'.$member->image)}}" 
                     alt="{{$member->name}}" 
                     class="w-32 h-32 rounded-full mx-auto mb-4 object-cover" />
                <h3 class="text-xl font-semibold text-[#17A2B8]">{{ $member->name }}</h3>
                <p class="text-gray-600">{{ $member->position }}</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </div>
@endsection