
<x-layout>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Todos - TaskMaster</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
    <body class="bg-gradient-to-br from-purple-500 to-pink-500 min-h-screen flex flex-col">
    <header class="bg-white bg-opacity-10 backdrop-blur-md">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <a href="#" class="text-white font-bold text-xl">TaskMaster</a>
                <div class="space-x-4">
                    <a href="#" class="text-white hover:text-purple-200 transition duration-300">Home</a>
                    <a href="#" class="text-white hover:text-purple-200 transition duration-300">Create Todo</a>
                    <a href="#" class="text-white hover:text-purple-200 transition duration-300">Logout</a>
                </div>
            </div>
        </nav>
    </header>

    <ul>


    <main class="flex-grow container mx-auto px-6 py-8">
        <div class="bg-white rounded-lg shadow-xl p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">All Todos</h1>

{{--            <div class="mb-6">--}}
{{--                <input type="text" placeholder="Search todos..." class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">--}}
{{--            </div>--}}
            <x-search />


            <ul class="space-y-4">







                <!-- Todo Item 1 -->
                @forelse($alltasks as $task)
                <li class="bg-gray-50 rounded-lg p-4 shadow">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-purple-600">
                            <a href="{{ route('task.show', $task->id) }}" class="text-lg font-medium text-purple-700 hover:underline">
                                {{ $task->title }}
                            </a>
                        </div>
                        <div class="flex items-center space-x-2">

                          <span class="px-2 py-1 text-xs font-medium rounded-full
                        {{ $task->status === 'Completed' ? 'bg-green-100 text-green-800' :
                            ($task->status === 'In Progress' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                        {{ $task->status }}
                    </span>
                           <a href="#" class="text-blue-500 hover:text-blue-600">Edit</a>

                            <form action="{{ route ('tasks.destroy', $task->id)  }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this task?')"
                                        class="text-red-500 hover:text-red-700">
                                    Delete
                                    </button>

                            </form>

                        </div>
                    </div>
                    <p class="mt-2 text-gray-600">{{ $task->description }}</p>
                    <div class="mt-2 text-sm text-gray-500">{{$task->due_date}}</div>
                </li>

                @empty
                    <li>No tasks found.</li>
                @endforelse
            </ul>

            <div class="mt-6 flex justify-between items-center">
                <div class="text-gray-600">Showing 3 of 10 todos</div>
                <div class="space-x-2">
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Previous</button>
                    <button class="px-4 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-600">Next</button>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2023 TaskMaster. All rights reserved.</p>
        </div>
    </footer>
    </body>
    </html>

</x-layout>
