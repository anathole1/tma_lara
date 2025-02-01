    @php
        $heros = DB::table('forewords')->get();
       
    @endphp

<div class="min-h-screen pt-16 bg-[#17A2B8]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @foreach ($heros as $hero)
            
        
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 py-12">
        <!-- Foreword Section -->
        <div class="space-y-6">
          <h1 class="text-5xl font-bold text-white">{{$hero->title}}</h1>
          <div class="text-white text-lg">
           {!!$hero->message!!}
          </div>
          <a href="#" class="inline-block px-6 py-3 bg-[#0C2340] text-white rounded-md hover:bg-opacity-90 transition-colors">
            Visit Us
          </a>
        </div>

        <!-- Legal Representative Image -->
        <div class="flex items-center justify-center lg:justify-end">
          <div class="text-center">
            <div class="p-2 rounded-full w-48 h-48 mx-auto">
              <img src="{{asset('images/'.$hero->image)}}" alt="{{$hero->name}}" class="w-full h-full rounded-full object-cover" />
            </div>
            <div class="mt-4 text-white">
              <h3 class="font-semibold text-xl">{{$hero->name}}</h3>
              <p class="text-lg">{{$hero->position}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

