<x-layout>
    <x-setting heading="Edit Post: {{ $post->title }}">
        <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title" :value="old('title', $post->title)" />
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" width="100" class="rounded-xl ml-6">
            </div>
            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('excerpt', $post->body) }}</x-form.textarea>
            <x-form.field>
                <x-form.label name="category" />
                    <select name="category_id" id="category_id">
                        <option value="/" disabled>Choose Category</option>
                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                            >{{ ucwords($category->name) }}
                        </option>
                    @endforeach
                    </select>
                <x-form.error name="category" />
            </x-form.field>
            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>