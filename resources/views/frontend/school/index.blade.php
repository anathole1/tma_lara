@extends('home')
@section('home_content')
 <div class="pt-8 bg-gray-50">
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-[#17A2B8]">Our School Programs</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            @foreach ($schools as $school)
                 
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{asset('media/'.$school->image)}}" alt="{{$school->title}}" class="w-full h-64 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-semibold text-[#17A2B8] mb-4">{{ $school->title }}</h3>
              <div class="text-gray-600">
                {!!$school->description!!}
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    
  </div>
  
@endsection