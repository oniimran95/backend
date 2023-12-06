<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Student Edit</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="w-full">
                        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
                              <a class=" bg-black text-white rounded-md hover:bg-sky-400 px-4 py-2" href="{{ route('students.index') }}">
                                  << Go to home page
                              </a>
                            <form action="{{ route('students.update', $student->id ) }}" method="post" enctype="multipart/form-data">
                              @csrf 
                              @method('put')
                              <div class=" grid grid-cols-2 gap-5">
                               <div>
                                  <label for="name" class="block mt-4 font-bold text-gray-600">Name</label>
                                  <input
                                    type="text" 
                                    id="name"
                                    name="name"
                                    placeholder="name."
                                    value="{{ old('name') ?? $student->name }}"
                                    class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-purple-500 w-full">
                                    @error('name')
                                      <span class="text-red-700">{{$message}}</span>
                                    @enderror
                                </div>
                     
                                <div >
                                  <label for="email" class="block mt-4 font-bold text-gray-600">Email</label>
                                  <input
                                    type="text"
                                    id="email" 
                                    name="email" 
                                    placeholder="Email"
                                    value="{{ old('email') ?? $student->email }}"
                                    class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-purple-500 w-full">
                                    @error('email')
                                      <span class="text-red-700">{{$message}}</span>
                                    @enderror
                                </div>
                              
                                <div>
                                  <label for="date" class="block mt-2 font-bold text-gray-600">Date_of_birth</label>
                                <input
                                  type="date"
                                  id="date" 
                                  name="date_of_birth"
                                  value="{{ old('date_of_birth') ?? date('Y-m-d', strtotime($student->date_of_birth)) }}"
                                  class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-purple-500 w-full">
                                  @error('date_of_birth')
                                      <span class="text-red-700">{{$message}}</span>
                                  @enderror 
                                </div>

                                <div >
                                  <label for="image" class="block mt-2 font-bold text-gray-600">Image</label>
                                  <input
                                    type="file"
                                    id="image" 
                                    name="image"
                                    class="py-2">
                                    @error('image')
                                      <span class="text-red-700">{{$message}}</span>
                                    @enderror
                                    <div>
                                      <img src="{{ asset("storage/images/$student->image") }}" alt="">
                                    </div>
                                </div>

                                <div>
                                  <label for="gender" class="block mt-2 font-bold text-gray-600">Gender</label>
                                  <input
                                    type="radio"
                                    id="male" 
                                    name="gender"
                                    value="male"  
                                    class="py-1"
                                    @if(old('gender') === 'male') checked @elseif($student->gender === 'male') checked @endif >
                                  <label for="male">Male</label>
                              
                                  <input
                                    type="radio"
                                    id="female" 
                                    name="gender" 
                                    value="female" 
                                    @if(old('gender') === 'female') checked @endif >
                                  <label for="female">Female</label>

                                  <input
                                    type="radio"
                                    id="others" 
                                    name="gender" 
                                    value="others"
                                    @if(old('gender') === 'female') checked @endif >
                                  <label for="others">Others</label>
                                </div>
                              </div>
                     
                                <button class="block w-full bg-green-600 hover:bg-green-500 text-white font-bold p-4 rounded-lg">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
