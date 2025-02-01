     @php
        $schools = DB::table('programs')->where('category','=','school')->get();
       
    @endphp
 
 <section id="programs" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-[#17A2B8]">Classes for Your Kids</h2>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse ($schools as $school)
              
        <!-- Pre-Primary -->
        <div class="space-y-4">
          <img src="{{asset('media/'.$school->image)}}" alt="Pre-Primary" class="w-full h-64 object-cover rounded-lg shadow-lg" />
          <h3 class="text-xl font-semibold text-[#17A2B8]">{{$school->title}}</h3>
          <div class="text-gray-600 space-y-2">
            {!!$school->description!!}
          </div>
        </div>
        @empty
        <div class="space-y-4">
            <p class="text-gray-600">No record found</p>
        </div>
        @endforelse
      </div>
    </div>
  </section>