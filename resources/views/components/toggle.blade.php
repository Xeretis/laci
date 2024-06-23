@props(['label', 'size' => 'default'])

<label class="inline-flex items-center cursor-pointer">
    <input type="checkbox" value="" class="sr-only peer" {{ $attributes }}>
    <div
        @class([
            'relative bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[\'\'] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:transition-all dark:border-gray-600 peer-checked:bg-blue-600',
            'w-11 h-6 after:h-5 after:w-5' => $size === 'default',
            'w-9 h-5 after:h-4 after:w-4' => $size === 'small',
            'w-14 h-7 after:h-6 after:w-6' => $size === 'large',
        ])></div>
    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $label }}</span>
</label>

