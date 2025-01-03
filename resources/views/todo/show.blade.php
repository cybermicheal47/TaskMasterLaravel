
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
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Complete project proposal</h1>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Description</h2>
            <p class="text-gray-600">Finish writing the project proposal for the new client. Include all the necessary details about timeline, budget, and deliverables. Make sure to proofread before sending it for review.</p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Status</h2>
            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">In Progress</span>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Due Date</h2>
            <p class="text-gray-600">May 15, 2023</p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Attached File</h2>
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                </svg>
                <a href="#" class="text-blue-500 hover:text-blue-600 transition duration-300">project_proposal_draft.docx</a>
            </div>
        </div>

        <div class="flex justify-between items-center">
            <div class="space-x-2">
                <a href="#" class="px-4 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-600 transition duration-300">Edit</a>
                <button class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition duration-300">Delete</button>
            </div>
            <div>
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-purple-600" checked><span class="ml-2 text-gray-700">Mark as Complete</span>
                </label>
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