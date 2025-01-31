<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
       
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('staffs.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back</a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto">
                        <form class="max-w-sm mx-auto"action="{{ route('staffs.update',$staff->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
      <input type="text" id="name" name="name" value="{{$staff->name}}" class="  @error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name"  />
      @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-5">
      <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">position</label>
      <input type="text" id="position" name="position" value="{{$staff->position}}" class=" @error('position') is-invalid @enderror  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "  />
      @error('position')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-5">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
        <select id="category" name="category" value="{{$staff->category}}" class=" @error('category') is-invalid @enderror  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      
          <option value="1">APPES Executive Committee</option>
          <option value="2">APPES Audit Committee</option>
          <option value="3">APPES Conflict Resolution Committee</option>
          <option value="4">TMA Administrative Staff</option>
          <option value="5">Other APPES Members</option>
          <option value="6">Honour APPES Members</option>
        </select>
        @error('category')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-5">
        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Image</label>
        <input  type="file" id="image" name="image" class=" @error('image') is-invalid @enderror  block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"  >
         <img src="/images/{{ $staff->image }}" class="w-24 h-24 rounded-full">
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
</x-app-layout>
