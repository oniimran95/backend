<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('success'))
            <!-- green-->
            <div class="flex justify-between py-4 px-8 my-3 bg-[#98f5e1]  text-[#236c5b]">
                <p class="font-sans">{{ $message }}</p>
                <button class="font-bold">&#10005;</button>
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="table-responsive">
                        <a class="float-right bg-black text-white rounded-md hover:bg-sky-400 mb-3 px-2 py-1" href="{{ route('students.create') }}">
                            Add student
                        </a>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-6 py-4" scope="col ">#</th>
                                    <th class="px-6 py-4" scope="col">Name</th>
                                    <th class="px-6 py-4" scope="col">Email</th>
                                    <th class="px-6 py-4" scope="col">Gender</th>
                                    <th class="px-6 py-4" scope="col">Date-of-birth</th>
                                    <th class="px-6 py-4" scope="col">Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <th class="px-6 py-4">{{ $loop->iteration }}</th>
                                    <td class="px-6 py-4">{{ $student->name }}</td>
                                    <td class="px-6 py-4">{{ $student->email }}</td>
                                    <td class="px-6 py-4">{{ $student->gender }}</td>
                                    <td class="px-6 py-4">{{ $student->date_of_birth }}</td>
                                    <td class="px-6 py-4">
                                        <img width="50px" src="{{ asset("storage/images/$student->image") }}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('students.edit', $student->id) }}">Edit</a> |
                                        <form action="{{ route('students.destroy', $student->id) }}" method="post">
                                         @csrf
                                         @method('delete')
                                         <input type="submit" value="delete"/>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
