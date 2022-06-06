@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
                <h2 class="ml-4">Add a comment!</h2>
            </header>
            <x-form.textarea name="body" />
            <div class="flex justify-end mt-4 pt-6 border-t border-gray-200">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href="/register" class="text-blue-500 hover:text-blue-600 hover:underline">Create an account</a>
        or
        <a href="/login" class="text-blue-500 hover:text-blue-600 hover:underline">log in</a> to comment.
    </p>
@endauth