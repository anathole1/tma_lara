@extends('home')
@section('home_content')
<div  class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{asset('media/'.$event->image)}}" alt="{{$event->title}}" class="w-full h-48 object-cover" />
            <div class="p-6">
              <div class="flex items-center justify-between mb-2">
                <span class="text-sm text-[#17A2B8]">{{ $event->category }}</span>
                <span class="text-sm text-gray-500">{{ $event->date }}</span>
              </div>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $event->title }}</h3>
              <div class="text-gray-600 mb-4">{!! $event->summary !!}</div>
             <div class="text-gray-600 mb-4">
                {!!$event->description!!}
             </div>
            </div>
          </div>
@endsection