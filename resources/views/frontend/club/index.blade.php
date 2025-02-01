@extends('home')
@section('home_content')
 <div class="pt-8 bg-gray-50">
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-[#17A2B8]">Student Clubs</h2>
          <p class="mt-4 text-gray-600">Explore our extracurricular activities</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($clubs as $club)     
          <div  class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{asset('media/'.$club->image)}}" alt="{{$club->title}}" class="w-full h-48 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-semibold text-[#17A2B8] mb-2">{{ $club->title }}</h3>
              <div class="text-gray-600 mb-4">{!! $club->description !!}</div>
              <div class="space-y-2">
                <h4 class="font-medium text-gray-900">Meeting Times:</h4>
                <p class="text-gray-600">{{ $club->meeting_time }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <Footer />
  </div>
@endsection