<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

      <div class="flex h-screen bg-gray-100">
    
    <div class="flex-1 overflow-auto">
      <div class="p-8">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">Dashboard Overview</h1>
        
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
          <div  class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
              <div class="p-3 rounded-full" >
               
              </div>
              <div class="ml-4">
                <p class="text-sm font-medium text-gray-600"></p>
                <p class="text-lg font-semibold text-gray-900"></p>
              </div>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <!-- Recent Activities -->
          <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
              <h2 class="text-lg font-semibold text-gray-900">Recent Activities</h2>
            </div>
            <div class="p-6">
              <div  class="mb-4 last:mb-0">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    
                  </div>
                  <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900"></p>
                    <p class="text-sm text-gray-500"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Upcoming Events -->
          <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
              <h2 class="text-lg font-semibold text-gray-900">Upcoming Events</h2>
            </div>
            <div class="p-6">
              <div  class="mb-4 last:mb-0">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    <div class="w-12 h-12 flex flex-col items-center justify-center bg-[#20B2AA] bg-opacity-10 rounded-lg">
                      <span class="text-sm font-semibold text-[#20B2AA]"> Jan</span>
                      <span class="text-xs text-[#20B2AA]">26th</span>
                    </div>
                  </div>
                  <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Igitambo cya Missa gisoza APPES Education Week</p>
                    <p class="text-sm text-gray-500"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
