    @php
        $staffs = DB::table('performers')->latest()->take(3)->get();
       
    @endphp  
  
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-[#17A2B8]">Our Best Performers</h2>
        <p class="mt-4 text-gray-600">Recognizing excellence in our community</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Best Student -->
            @foreach ($staffs as $staff)
                
           
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
          <div class="relative">
            <img src="{{asset('images/'.$staff->image)}}" alt="Best Student" class="w-full h-48 object-contain" />
            <div class="absolute top-0 right-0 bg-[#17A2B8] text-white px-4 py-2 rounded-bl-lg">
              {{$staff->category}}
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-[#17A2B8] mb-2">{{$staff->name}}</h3>
            <p class="text-gray-600 mb-2">{{$staff->role}}</p>
            <div class="space-y-2">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="ml-2 text-gray-600">{{$staff->experience}}</span>
              </div>
              <p class="text-gray-600">{{$staff->summary}}</p>
            </div>
          </div>
        </div>
    @endforeach
       
      </div>
    </div>
  </section>