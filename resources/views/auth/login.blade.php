<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - TaskMaster</title>
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
                <a href="#" class="text-white hover:text-purple-200 transition duration-300">Home</a>
            </div>
        </nav>
    </header>

    <main class="flex-grow container mx-auto px-6 py-8 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-xl p-8 max-w-md w-full">
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Login to TaskMaster</h1>



            <!-- Notifications -->
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif


            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="you@example.com">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">


                    </div>
                    <a href="#" class="text-sm text-purple-600 hover:text-purple-500">Forgot password?</a>
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        Sign In
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Don't have an account?
                    <a href="{{route('register')}}" class="font-medium text-purple-600 hover:text-purple-500">Sign up</a>
                </p>
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
