@php
    $menus = [
        'home' => 'Home',
    ];
@endphp

<div class="flex flex-col md:flex-row justify-center md:justify-start gap-4 bg-gray-800 p-6 w-full">
    <x-ui.logo class="text-neutral-0 text-2xl"/>

    <div class="flex items-center gap-3 ml-4">
        @foreach ($menus as $menuRoute => $menu)
            <x-ui.navbar.button
                :current-page="Route::currentRouteName() === $menuRoute"
                :href="route($menuRoute)"
            >
                {{ $menu }}
            </x-ui.navbar.button>
        @endforeach
    </div>
</div>