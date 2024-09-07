@props(['currentPage' => false])

<a
    {{
        $attributes->class([
            'rounded-lg text-neutral-0 px-5 py-2',
            'text-md font-medium duration-300',
            'hover:bg-gray-700' => !$currentPage,
            'bg-gray-900'       => $currentPage
        ])
    }}
>
    {{ $slot }}    
</a>