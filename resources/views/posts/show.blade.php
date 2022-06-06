<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10 pt-10">
                <div class="col-span-4 text-center ">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl">
                    <p class="block mt-4 text-sm text-gray-400">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </p>
                    <div class="flex items-center text-sm justify-center mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-span-8">
                    <div class="flex justify-between mb-6 -mt-14">
                        <a href="/" class="relative inline-flex items-center text-lg transition-colors duration-300 hover:text-blue-500">Back to Posts</a>
                        <div class="space-x-2">
                            <x-category-button :category="$post->category" />
                        </div>
                    </div>
                    <h1 class="text-4xl font-bold mb-10">{{ $post->title }}</h1>
                    <div class="space-y-4 text-lg leading-loose">
                        {!! $post->body !!}
                    </div>
                </div>
                <section class="col-start-5 col-span-8 mt-10 space-y-6">
                @include('posts/_add-comment-form')
                @foreach ($post->comments as $comment)
                    <x-post-comment :comment="$comment" />
                @endforeach
                </section>
            </article>
        </main>
    </section>
</x-layout>