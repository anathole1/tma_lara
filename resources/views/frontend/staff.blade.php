    @php
        $staffs = DB::table('staff')->where('category','=','APPES Executive Committee')->get();
       
    @endphp

      <section id="staff" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-[#17A2B8]">Meet Our Staff</h2>
      </div>
     
          
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
         @foreach ($staffs as $staff)
        <div class="text-center">
          <div class="relative">
            <img src="{{asset('images/'.$staff->image)}}" alt="{{$staff->name}}" class="w-64 h-64 rounded-full mx-auto object-cover" />
          </div>
          <div class="mt-4">
            <h3 class="text-lg font-semibold text-[#17A2B8]">{{ $staff->name }}</h3>
            <p class="text-sm text-gray-600">{{ $staff->position }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>