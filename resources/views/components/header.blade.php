<header class="bg-white bg-opacity-10 backdrop-blur-md">
    <nav class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-white font-bold text-xl">TaskMaster</a>
            @auth
                <div class="space-x-4">
                   @if(request()->routeIs('tasks.index'))
                        <a href="{{ route('home') }}" class="text-white hover:text-purple-200 transition duration-300">Home</a>

                    @else
                    <a href="{{ route('tasks.index') }}" class="text-white hover:text-purple-200 transition duration-300">All Tasks</a>
                    @endif

                    <a href="{{route('task.create')}}"  class="text-white hover:text-purple-200 transition duration-300">Create Task</a>
                     <form action="{{route('logout')}}" method="POST" class="inline-block">
                         @csrf
                         <button type="submit" class="text-white hover:text-purple-200 transition duration-300">Logout</button>
                     </form>
                </div>



            @else
            <div>
                <a href="{{route('login')}}" class="text-white hover:text-purple-200 transition duration-300">Login</a>
                <a href="{{route('register')}}" class="ml-4 px-4 py-2 bg-white text-purple-500 rounded-full font-semibold hover:bg-purple-100 transition duration-300">Sign Up</a>
            </div>
            @endauth
        </div>
    </nav>
</header>
