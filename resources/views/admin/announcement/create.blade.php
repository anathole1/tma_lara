<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Announcement') }}
        </h2>
    </x-slot>

    <div class="py-12">
       
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('announcement.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back</a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto">
                        <form class="max-w-sm mx-auto" action="{{ route('announcement.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
      <input type="text" id="title" name="title" class="  @error('title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="title"  />
      @error('title')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-5">
      <label for="duedate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Due Date</label>
      <input type="date" id="duedate" name="duedate" class=" @error('duedate') is-invalid @enderror  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "  />
      @error('duedate')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="mb-5">
        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file">File</label>
        <input  type="file" id="files" name="files" class=" @error('files') is-invalid @enderror  block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"  >
        @error('files')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
  
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fa-solid fa-floppy-disk"></i> Publish Announcement</button>
  </form>
  
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
