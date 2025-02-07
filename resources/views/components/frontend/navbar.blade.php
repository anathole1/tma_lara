 <nav class="bg-white shadow-lg" x-data="{ isOpen: false }">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
          <!-- Logo -->
          <div class="flex-shrink-0 flex items-center">
            <div class="w-10 h-10">
              <img src="{{asset('images/logo.png')}}" alt="Trust Mountain Academy" class="h-12" />
            </div>
            <span class="ml-2 text-xl font-bold text-[#17A2B8]">Trust Mountain Academy</span>
          </div>

          <!-- Desktop Menu -->
          <div class="hidden md:flex items-center space-x-8">
            <a href="{{route('home')}}" class="text-gray-600 hover:text-teal-500 {{(request()->routeIs('home')? 'text-red-400 font-medium' : '')}}">Home</a>
            <a href="{{route('about.index')}}" class="text-gray-600 hover:text-teal-500 {{(request()->routeIs('about.index')? 'text-red-400 font-medium' : '')}}">About</a>
            <a href="{{route('event.index')}}" class="text-gray-600 hover:text-teal-500 {{(request()->routeIs('event.index')? 'text-red-400 font-medium' : '')}}">Events</a> 
            <a href="{{route('staff.index')}}" class="text-gray-600 hover:text-teal-500 {{(request()->routeIs('staff.index')? 'text-red-400 font-medium' : '')}}">Staff</a>
            <a href="{{route('gallery.index')}}" class="text-gray-600 hover:text-teal-500 {{(request()->routeIs('gallery.index')? 'text-red-400 font-medium' : '')}}">Gallery</a>
            <a href="{{route('contact.create')}}" class="text-gray-600 hover:text-teal-500 {{(request()->routeIs('contact.create')? 'text-red-400 font-medium' : '')}}">Contact</a>
            <div class="relative" x-data="{ isOpen: false }">
              <button @click="isOpen = !isOpen" class="text-gray-600 hover:text-teal-500 flex items-center">
                Programs
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div x-show="isOpen" @click.away="isOpen = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                <a href="{{route('school.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-teal-50 {{(request()->routeIs('school.index')? 'text-red-400 font-medium' : '')}}">School</a>
                <a href="{{route('club.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-teal-50 {{(request()->routeIs('club.index')? 'text-red-400 font-medium' : '')}}">Clubs</a>
                <a href="{{route('activities.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-teal-50 {{(request()->routeIs('activities.index')? 'text-red-400 font-medium' : '')}}">Other Activities</a>
              </div>
            </div>
            <a href="{{route('announcements.index')}}" class="text-gray-600 hover:text-teal-500 {{(request()->routeIs('announcements.index')? 'text-red-400 font-medium' : '')}}">Publications</a>
           
          </div>

          <!-- Mobile menu button -->
          <div class="md:hidden flex items-center">
            <button @click="isOpen = !isOpen" class="text-gray-500 hover:text-teal-500 focus:outline-none">
              <svg class="h-6 w-6" x-show="!isOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <svg class="h-6 w-6" x-show="isOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden" x-show="isOpen" @click.away="isOpen = false">
          <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{route('home')}}" class=" block px-3 py-2 rounded-md text-gray-600 hover:text-teal-500 hover:bg-teal-50 {{(request()->routeIs('home')? 'text-red-400 font-medium' : '')}}">Home</a>
            <a href="{{route('about.index')}}" class="block px-3 py-2 rounded-md text-gray-600 hover:text-teal-500 hover:bg-teal-50 {{(request()->routeIs('about.index')? 'text-red-400 font-medium' : '')}}">About</a>
            <a href="{{route('event.index')}}" class="block px-3 py-2 rounded-md text-gray-600 hover:text-teal-500 hover:bg-teal-50 {{(request()->routeIs('event.index')? 'text-red-400 font-medium' : '')}}">Events</a> 
            <a href="{{route('staff.index')}}" class="block px-3 py-2 rounded-md text-gray-600 hover:text-teal-500 hover:bg-teal-50 {{(request()->routeIs('staff.index')? 'text-red-400 font-medium' : '')}}">Staff</a>
            <a href="{{route('gallery.index')}}" class="block px-3 py-2 rounded-md text-gray-600 hover:text-teal-500 hover:bg-teal-50 {{(request()->routeIs('gallery.index')? 'text-red-400 font-medium' : '')}}">Gallery</a>
            <a href="{{route('contact.create')}}" class="block px-3 py-2 rounded-md text-gray-600 hover:text-teal-500 hover:bg-teal-50 {{(request()->routeIs('contact.create')? 'text-red-400 font-medium' : '')}}">Contact</a>
            <a href="{{route('announcements.index')}}" class="block px-3 py-2 rounded-md text-gray-600 hover:text-teal-500 hover:bg-teal-50 {{(request()->routeIs('announcements.index')? 'text-red-400 font-medium' : '')}}">Publications</a>
            <div class="relative" x-data="{ isOpen: false }">
              <button @click="isOpen = !isOpen" class="px-3 text-gray-600 hover:text-teal-500 flex items-center">
                Programs
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div x-show="isOpen" @click.away="isOpen = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                <a href="{{route('school.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-teal-50 {{(request()->routeIs('school.index')? 'text-red-400 font-medium' : '')}}">School</a>
            <a href="{{route('club.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-teal-50 {{(request()->routeIs('club.index')? 'text-red-400 font-medium' : '')}}">Clubs</a>
            <a href="{{route('activities.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-teal-50 {{(request()->routeIs('activities.index')? 'text-red-400 font-medium' : '')}}">Other Activities</a>
              </div>
            </div>
          {{-- <a href="#" class="block px-3 py-2 rounded-md text-gray-600 hover:text-teal-500 hover:bg-teal-50">Sign in</a>
            <a href="#" class="block px-3 py-2 rounded-md text-white bg-teal-500 hover:bg-teal-600">Sign up</a> --}}
          </div>
        </div>
      </div>
    </nav>