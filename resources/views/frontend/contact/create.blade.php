@extends('home')
@section('home_content')
  <div class="pt-8 bg-gray-50">
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-[#17A2B8]">Contact Us</h2>
          <p class="mt-4 text-gray-600">We'd love to hear from you. Please fill out this form.</p>
        </div>
  @session('success')
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">{{$value}}</span> 
            </div>
          @endsession
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
          <!-- Contact Form -->
          <div class="bg-white rounded-lg shadow-lg p-8">
            <form class="space-y-6" action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Names</label>
                <input 
                  type="text" 
                  name="name"
                  class="w-full px-4 py-2 rounded-md border border-gray-300 focus:border-[#17A2B8] focus:ring-1 focus:ring-[#17A2B8] outline-none transition-colors bg-white text-gray-900" 
                />
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input 
                  type="email" 
                  name="email"
                  placeholder="you@example.com"
                  class="w-full px-4 py-2 rounded-md border border-gray-300 focus:border-[#17A2B8] focus:ring-1 focus:ring-[#17A2B8] outline-none transition-colors bg-white text-gray-900" 
                />
              </div>
                <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                <input 
                  type="text" 
                  name="subject"
                  class="w-full px-4 py-2 rounded-md border border-gray-300 focus:border-[#17A2B8] focus:ring-1 focus:ring-[#17A2B8] outline-none transition-colors bg-white text-gray-900" 
                />
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                <textarea 
                  rows="4" 
                  name="message"
                  placeholder="Your message here..."
                  class="w-full px-4 py-2 rounded-md border border-gray-300 focus:border-[#17A2B8] focus:ring-1 focus:ring-[#17A2B8] outline-none transition-colors resize-none bg-white text-gray-900"
                ></textarea>
              </div>

              <button type="submit" class="w-full bg-[#17A2B8] text-white px-6 py-3 rounded-md hover:bg-opacity-90 transition-colors font-medium">
                Send Message
              </button>
            </form>
          </div>

          <!-- Contact Information -->
          <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-xl font-semibold text-[#17A2B8] mb-6">Contact Information</h3>
            
            <div class="space-y-6">
              <div class="flex items-start space-x-4">
                <div class="bg-[#17A2B8] bg-opacity-10 p-3 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#17A2B8]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-gray-900">Address</h4>
                  <p class="text-gray-600 mt-1">Shyorongi-Rulindo-Rwanda</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="bg-[#17A2B8] bg-opacity-10 p-3 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#17A2B8]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-gray-900">Email</h4>
                  <p class="text-gray-600 mt-1">info@trustmountainacademy.rw</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="bg-[#17A2B8] bg-opacity-10 p-3 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#17A2B8]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-medium text-gray-900">Phone</h4>
                  <p class="text-gray-600 mt-1"> +250789550448</p>
                </div>
              </div>

              <div class="pt-6 mt-6 border-t border-gray-200">
                <h4 class="font-medium text-gray-900 mb-4">Follow Us</h4>
                <div class="flex space-x-4">
                  <a href="#" class="text-gray-400 hover:text-[#17A2B8] transition-colors">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                    </svg>
                  </a>
                  <a href="#" class="text-gray-400 hover:text-[#17A2B8] transition-colors">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                    </svg>
                  </a>
                  <a href="#" class="text-gray-400 hover:text-[#17A2B8] transition-colors">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection