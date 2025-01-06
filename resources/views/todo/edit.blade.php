<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Todo - TaskMaster</title>
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
                <a href="#" class="text-white hover:text-purple-200 transition duration-300">Back to List</a>
            </div>
        </nav>
    </header>

    <main class="flex-grow container mx-auto px-6 py-8">
        <div class="bg-white rounded-lg shadow-xl p-6 max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">EDIT Your Todo</h1>

            <form action="{{ route('tasks.update', $todotask->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                    <input type="text" id="title" name="title" required value="{{ old('title', $todotask->title) }}"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                </div>

                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="description" name="description" rows="4"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">{{ old('description', $todotask->description) }}</textarea>
                </div>

                <div class="mb-6">
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                    <select id="status" name="status" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                        <option value="Not Started" {{ old('status', $todotask->status) == 'Not Started' ? 'selected' : '' }}>Not Started</option>
                        <option value="In Progress" {{ old('status', $todotask->status) == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="Completed" {{ old('status', $todotask->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="due_date" class="block text-sm font-medium text-gray-700 mb-2">Due Date</label>
                    <input type="date" id="due_date" name="due_date" required value="{{ old('due_date', $todotask->due_date) }}"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                </div>

                <div class="mb-6">
                    <label for="attachment" class="block text-sm font-medium text-gray-700 mb-2">Attachment</label>
                    <input type="file" id="attachment" name="attachment"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                    @if ($todotask->file_path)
                        <p class="mt-2 text-sm text-gray-500">
                            Current File:
                            <a href="{{ asset('storage/' . $todotask->file_path) }}" target="_blank" class="text-blue-600 underline">
                                {{ basename($todotask->file_path) }}
                            </a>
                        </p>
                    @endif
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                            class="px-4 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-600 transition duration-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                        Edit Todo
                    </button>
                    <a href="#" class="text-gray-600 hover:text-gray-800 transition duration-300">Cancel</a>
                </div>
            </form>
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
