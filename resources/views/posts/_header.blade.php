<header class="max-w-6xl mx-auto mt-20 text-center">
    <div class=" max-w-xl mx-auto">
        <h1 class="text-4xl">Latest <span class="text-blue-500">Laravel From Scratch</span> News</h1>
        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
            <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
                <x-category-dropdown />
            </div>
            {{-- <span class="flex lg:inline-flex bg-gray-100 rounded-xl py-2 px-5">
                <select name="" id="" class="flex-1 appearance-none bg-transparent text-sm font-semibold">
                    <option value="filters" disabled selected>Other Filters</option>
                </select>
            </span> --}}
            <span class="flex lg:inline-flex bg-gray-100 rounded-xl py-2 px-5">
                <form method="GET" action="/">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                    <input type="text"
                            name="search"
                            id="search"
                            placeholder="Find something"
                            class="bg-transparent placeholder-black text-sm font-semibold"
                            value="{{ request('search') }}"
                    >
                </form>
            </span>
        </div>
    </div>
</header>