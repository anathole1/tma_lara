@extends('home')
@section('home_content')
  <div class="pt-8 bg-gray-50">
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-[#17A2B8]">Photo Gallery</h2>
          <p class="mt-4 text-gray-600">Capturing moments from our school life</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($galleries as $gallery)
                
            
          <div class="relative group">
            <img src="{{asset('media/'.$gallery->image)}}" alt="{{$gallery->title}}" class="w-full h-64 object-cover rounded-lg" />
            <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg flex items-center justify-center">
              <div class="text-white text-center p-4">
                <h3 class="text-lg font-semibold">{{ $gallery->title }}</h3>
                <p class="text-sm">{{ $gallery->description }}</p>
              </div>
            </div>
          </div>
          @endforeach
          {{ $galleries->links() }}
        </div>
      </div>
    </section>
    
  </div>
@endsection