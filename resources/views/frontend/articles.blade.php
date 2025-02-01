     @php
        $events = DB::table('events')->latest()->take(3)->get();
       
    @endphp  
  
  <section id="articles" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-[#17A2B8]">Latest Articles From Blog</h2>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ($events as $event )
            
        
        <div  class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{asset('media/'.$event->image)}}" alt="{{$event->title}}" class="w-full h-48 object-cover" />
          <div class="p-6">
            <div class="flex items-center justify-between mb-2">
              <span class="text-sm text-[#17A2B8]">news</span>
              <span class="text-sm text-gray-500">{{ date('d M Y',strtotime($event->created_at)) }} </span>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $event->title }}</h3>
            <p class="text-gray-600 mb-4">{!!$event->summary!!}</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <img src="{{asset('media/'.$event->image)}}" alt="{{$event->title}}" class="w-8 h-8 rounded-full mr-2">
                <span class="text-sm text-gray-600">Author</span>
              </div>
              <a href="{{url('/events/view/'.$event->id)}}" class="bg-[#17A2B8] text-white px-4 py-2 rounded hover:bg-opacity-90 transition-colors">
                Read More
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>