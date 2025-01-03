<x-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskMaster - Your Personal Todo App</title>
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
            <div>
                <a href="#" class="text-white hover:text-purple-200 transition duration-300">Login</a>
                <a href="#" class="ml-4 px-4 py-2 bg-white text-purple-500 rounded-full font-semibold hover:bg-purple-100 transition duration-300">Sign Up</a>
            </div>
        </div>
    </nav>
</header>

<main class="flex-grow container mx-auto px-6  py-12 flex flex-col md:flex-row items-center justify-center">
    <div class="md:w-1/2 text-center md:text-left mb-8 md:mb-0">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Organize Your Life with TaskMaster</h1>
        <p class="text-xl text-purple-100 mb-8">The simple, intuitive todo app that helps you stay on top of your tasks and boost your productivity.</p>
        <a href="/todos" class="bg-white text-purple-500 px-8 py-3 rounded-full font-semibold text-lg hover:bg-purple-100 transition duration-300 inline-block">Get Started</a>
    </div>
    <div class="md:w-1/2 flex justify-center md:justify-end" >
        <img  src="{{ asset('/images/creativity.png') }}" alt="TaskMaster App Preview" class="rounded-lg ">
    </div>
</main>

<section class="bg-white py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Why Choose TaskMaster?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-purple-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Simple and Intuitive</h3>
                <p class="text-gray-600">Easy-to-use interface that helps you focus on what matters most - your tasks.</p>
            </div>
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-purple-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">File Attachments</h3>
                <p class="text-gray-600">Attach important files to your tasks for quick and easy access.</p>
            </div>
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-purple-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Smart Reminders</h3>
                <p class="text-gray-600">Never miss a deadline with our intelligent reminder system.</p>
            </div>
        </div>
    </div>
</section>

<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-6 text-center">
        <p>&copy; 2023 TaskMaster. All rights reserved.</p>
        <div class="mt-4">
            <a href="#" class="text-gray-400 hover:text-white mx-2">Privacy Policy</a>
            <a href="#" class="text-gray-400 hover:text-white mx-2">Terms of Service</a>
            <a href="#" class="text-gray-400 hover:text-white mx-2">Contact Us</a>
        </div>
    </div>
</footer>
</body>
</html>

</x-layout>
