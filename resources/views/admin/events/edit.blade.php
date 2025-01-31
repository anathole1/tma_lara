<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('events.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back</a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto">
                        <form class="w-full mx-auto" action="{{ route('events.update',$event->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your title</label>
      <input type="text" id="title" name="title" value="{{$event->title}}" class="  @error('title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="title"  />
      @error('title')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
                            <div class="mb-5">
        
<label for="summary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your summary</label>
<textarea id="summary" name="summary"  rows="4" class="@error('summary') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here...">
    {{$event->summary}}
</textarea>

      @error('summary')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
<div class="mb-5">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Description</label>
   <textarea id="description" name="description"  rows="4" class="@error('description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here...">
    {{$event->description}}
   </textarea>

    {{-- <textarea name="description" id="description" rows="6" class="@error('description') is-invalid @enderror text-white dark:text-black"></textarea> --}}
     @error('description')
                <div class="form-text text-red-500">{{ $message }}</div>
            @enderror
</div>
    <div class="mb-5">
        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Image</label>
        <input  type="file" id="image" name="image" class=" @error('image') is-invalid @enderror  block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"  >
        <img src="/media/{{ $event->image }}" class="w-24 h-24 rounded-full">
        
        @error('image')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
  
    <button type="submit" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Update Event</button>
  </form>
  
</div>

                </div>
            </div>
        </div>
    </div>
   @section('forewordCkEditor')
        <script>
           
            ClassicEditor
                 .create( document.querySelector( '#description' )
                ,{
                    ckfinder:{
                        uploadUrl: '{{ route('events.upload').'?_token='.csrf_token()}}'
                    }
                }
                )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    @endsection
</x-app-layout>
