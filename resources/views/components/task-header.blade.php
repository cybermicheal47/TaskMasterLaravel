<header class="bg-white bg-opacity-10 backdrop-blur-md">
    <nav class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-white font-bold text-xl">TaskMaster</a>
            @auth
                <div class="space-x-4">
                    <a href="{{ route('tasks.index') }}" class="text-white hover:text-purple-200 transition duration-300"> << Back To All Tasks</a>

                </div>


            @else
                <div>
                    <a href="#" class="text-white hover:text-purple-200 transition duration-300">Login</a>
                    <a href="#" class="ml-4 px-4 py-2 bg-white text-purple-500 rounded-full font-semibold hover:bg-purple-100 transition duration-300">Sign Up</a>
                </div>
            @endauth
        </div>
    </nav>
</header>
