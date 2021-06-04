@props(['trigger'])

<div x-data="{ show:false }" @click.away="show=false">
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    {{-- dropdown links --}}

    <div x-show="show" class="py-2 absolute bg-gray-100 w-full rounded-xl m-1 z-50"
         style="display: none">
        {{ $slot }}
    </div>
</div>
