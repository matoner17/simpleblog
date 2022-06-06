@props(['trigger'])
<div x-data="{ show: false }" @click.away="show = false" class=relative>
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    <div x-show="show" class="absolute py-2 mt-2 bg-gray-100 w-full max-h-52 rounded-xl overflow-auto z-50" style="display: none;">
        {{ $slot }}
    </div>
</div>