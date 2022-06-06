@if (session()->has('success'))
    <div x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="fixed top-20 right-5 bg-green-500 text-white text-sm rounded-xl py-2 px-4">
        <p>{{ session('success') }}</p>
    </div>
@endif