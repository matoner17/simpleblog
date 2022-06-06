<x-dropdown>
    <x-slot name="trigger">
        <button class="flex lg:inline-flex py-2 pl-3 pr-9 w-full lg:w-40 text-sm text-left font-semibold">
                {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
        </button>
    </x-slot>
    <x-dropdown-item
        href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request()->routeIs('home')">All
    </x-dropdown-item>
@foreach ($categories as $category)
    <x-dropdown-item
        href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
        :active='request()->is("/?category=$category->slug")'>{{ ucwords($category->name) }}
    </x-dropdown-item>
@endforeach
</x-dropdown>