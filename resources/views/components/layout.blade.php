<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <title>Laravel From Scratch Blog</title>
</head>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" width="165" height="16" alt="Laracasts Logo">
                </a>
            </div>
            <div class="flex items-center mt-8 md:mt-0">
            @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</button>
                    </x-slot>
                    @admin
                        <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">All Posts</x-dropdown-item>
                        <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                    @endadmin
                    <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>
                    <form method="POST" action="/logout" id="logout-form" class="hidden">
                        @csrf
                    </form>
                </x-dropdown>
            @else
                <a href="/login" class="text-xs font-bold uppercase">Log In</a>
                <a href="/register" class="ml-3 text-xs font-bold uppercase">Register</a>
            @endauth
                <a href="#newsletter" class="bg-blue-500 py-3 px-5 ml-3 rounded-full text-xs text-white font-semibold uppercase">Subscribe for Updates</a>
            </div>
        </nav>
        {{ $slot }}
        <footer id="newsletter" class="border border-black border-opacity-5 bg-gray-100 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.png" alt="Lary newsletter icon" class="mx-auto w-36">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                    <form action="/newsletter" method="POST" class="lg:flex text-sm">
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:tw-inline">
                                <img src="/images/mailbox-icon.svg" alt="Mailbox icon">
                            </label>
                            <div>
                                <input type="email" name="email" id="email" placeholder="Your email address" class="lg:bg-transparent pl-4">
                            @error('email')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <button type="submit" class="bg-blue-500 py-3 px-8 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs text-white font-semibold uppercase">Subscribe</button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
    <x-flash />
</body>
</html>