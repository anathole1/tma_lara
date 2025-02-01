@extends('home')
@section('home_content')
   

  <div class="pt-8 bg-gray-50">
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-[#17A2B8]">About Trust Mountain Academy</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div class="space-y-6">
            <img src="{{asset('media/about.jpg')}}" alt="School Building" class="rounded-lg shadow-lg" />
          </div>
@foreach ($abouts as $about)
 
          <div class="space-y-6 text-gray-600">
            <h3 class="text-xl font-semibold text-[#17A2B8]">{{$about->title}}</h3>
            <p>{!!$about->content!!}</p>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </div>
@endsection