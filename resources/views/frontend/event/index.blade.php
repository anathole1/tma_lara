@extends('home')
@section('home_content')
<div class="pt-8 bg-gray-50">
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-[#17A2B8]">School Events</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($events as $event)
          <div  class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{asset('media/'.$event->image)}}" alt="{{$event->title}}" class="w-full h-48 object-cover" />
            <div class="p-6">
              <div class="flex items-center justify-between mb-2">
                <span class="text-sm text-[#17A2B8]">{{ $event->category }}</span>
                <span class="text-sm text-gray-500">{{ $event->date }}</span>
              </div>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $event->title }}</h3>
              <div class="text-gray-600 mb-4">{!! $event->summary !!}</div>
              <a href="{{url('/events/view/'.$event->id)}}" class="bg-[#17A2B8] text-white px-4 py-2 rounded hover:bg-opacity-90 transition-colors">
                Learn More
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </div>
@endsection