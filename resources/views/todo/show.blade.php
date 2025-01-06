
<x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Todo - TaskMaster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-500 to-pink-500 min-h-screen flex flex-col">
<x-task-header/>

<main class="flex-grow container mx-auto px-6 py-8">
    <div class="bg-white rounded-lg shadow-xl p-6 max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{$todotask->title}}</h1>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Description</h2>
            <p class="text-gray-600">{{$todotask->description}}.</p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Status</h2>
            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">{{$todotask->status}}</span>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Due Date</h2>

            <p class="text-gray-600"> {{ $todotask->due_date ? $todotask->due_date->format('F j, Y') : 'No due date set' }}</p>
        </div>

        <div class="mb-6">

            <div class="flex items-center space-x-2">

{{--                <a href="#" class="text-blue-500 hover:text-blue-600 transition duration-300">project_proposal_draft.docx</a>--}}

                @if ($todotask->file_path)
                     <div class="flex-col" >
                    <p class="mt-2 text-sm text-gray-500 pb-4"> Attached  File:</p>

                        <div class="flex  gap-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                        </svg>
                        <a href="{{ asset('storage/' . $todotask->file_path) }}" target="_blank" class="text-blue-600 underline">
                            {{ basename($todotask->file_path) }}
                        </a>
                    </div>
                     </div>


                @endif
            </div>
        </div>

        <div class="flex justify-between items-center">
            <div class="space-x-2">
                <a href="{{route('tasks.edit',$todotask->id)}}" class="px-4 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-600 transition duration-300">Edit</a>

                <form action="{{ route ('tasks.destroy', $todotask->id)  }}" class="inline-block" method="POST">
                    @csrf
                    @method('DELETE')
                <button class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition duration-300">Delete</button>
                </form>
            </div>
            <div>
{{--                <label class="inline-flex items-center">--}}
{{--                    <input type="checkbox" class="form-checkbox h-5 w-5 text-purple-600" checked><span class="ml-2 text-gray-700">Mark as Complete</span>--}}
{{--                </label>--}}
            </div>
        </div>
    </div>
</main>

<x-footer/>
</body>
</html>

</x-layout>
