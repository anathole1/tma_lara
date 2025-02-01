    @php
        $about = DB::table('abouts')->where('title', 'Historical background')->get();
        $aboutss = DB::table('abouts')->whereNot('title', 'Historical background')->get();
       
    @endphp
      <section id="about" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @foreach ($about as $abouts)
            
       
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-[#17A2B8]">{{$abouts->title}}</h2>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
          <img src="{{asset('media/about.jpg')}}" alt="Our Team" class="rounded-lg shadow-lg" />
          <div class="text-center">
            <h3 class="text-xl font-semibold text-[#17A2B8]">Building a strong foundation for a better future</h3>
          </div>
        </div>
        <div class="space-y-6 text-gray-600">
          <p>
           {!!$abouts->content!!}
          </p>
          @endforeach
          @foreach ($aboutss as $about)
            <h1 class="font-semibold text-xl text-[#17A2B8]">{{$about->title}}</h1>
         <div class="text-gray-700 dark:text-white">{!!$about->content!!}</div>
          </ul>
          @endforeach

        </div>
      </div>
       
    </div>
  </section>