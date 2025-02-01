<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Program') }}
        </h2>
    </x-slot>

    <div class="py-12">
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('programs.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back</a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto">
                        <form class="max-w-6xl mx-auto" action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your title</label>
      <input type="text" id="title" name="title" class="  @error('title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="title"  />
      @error('title')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-5">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Description</label>
   <textarea id="description" name="description" rows="4" class="@error('description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

    {{-- <textarea name="description" id="description" rows="6" class="@error('description') is-invalid @enderror text-white dark:text-black"></textarea> --}}
     @error('description')
                <div class="form-text text-red-500">{{ $message }}</div>
            @enderror
</div>
    <div class="mb-5">
      <label for="meeting_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meeting time</label>
      <input type="text" id="meeting_time" name="meeting_time" class=" @error('meeting_time') is-invalid @enderror  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "  />
      @error('meeting_time')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-5">
      <label for="schedule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scheduled</label>
      <input type="text" id="schedule" name="schedule" class=" @error('schedule') is-invalid @enderror  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "  />
      @error('schedule')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-5">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
        <select id="category" name="category" class=" @error('category') is-invalid @enderror  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      
          <option value="school">School</option>
          <option value="club">Clubs</option>
          <option value="other">Other Activities</option>
        </select>
        @error('category')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-5">
        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Image</label>
        <input  type="file" id="image" name="image" class=" @error('image') is-invalid @enderror  block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"  >
        @error('image')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
  
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  
</div>

                </div>
            </div>
        </div>
    </div>

    @section('forewordCkEditor')
    <script>
        ClassicEditor.create(document.querySelector("#description")).catch(
            (error) => {
                console.error(error);
            }
        );
    </script>
    @endsection
</x-app-layout>
