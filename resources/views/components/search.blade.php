<div class="mb-6">
    <form action="{{ route('tasks.search') }}" method="GET">
        <input type="text" name="search" value="{{ request('search') }}"
               placeholder="{{ $placeholder ?? 'Search todos...' }}"
               class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
    </form>
</div>
