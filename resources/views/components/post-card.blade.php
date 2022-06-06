@props(['post'])
<article 
{{ $attributes->merge(['class' => 'transition-colors duration-300 border border-black border-opacity-0 hover:bg-gray-100 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5">
        <div>
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog post illustration" class="rounded-xl">
        </div>
        <div class="flex flex-col justify-between mt-8">
            <header>
                <div class="space-x-2">
                    <x-category-button :category="$post->category" />
                </div>
                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                    </h1>
                    <span class="block mt-2 text-sm text-gray-400">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>
            <div class="text-sm mt-2">
                {!! $post->excerpt !!}
            </div>
            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>
                <div>
                    <a href="/posts/{{ $post->slug }}" class="py-2 px-8 text-xs font-semibold bg-gray-200 rounded-full">Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>