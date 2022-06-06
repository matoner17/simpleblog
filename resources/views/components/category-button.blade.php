@props(['category'])
<a href="/?category={{ $category->slug }}" class="px-3 py-1 border border-blue-300 rounded-full text-xs text-blue-300 font-semibold uppercase">
    {{ $category->name }}
</a>