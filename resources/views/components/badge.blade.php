@props(['color' => 'default', 'size' => 'default', 'bordered' => false])

<span {{ $attributes->merge(['class' => implode(' ', [
    $color === 'default' ? 'bg-blue-100 text-blue-800 font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300' : '',
    $color === 'dark' ? 'bg-gray-100 text-gray-800 font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300' : '',
    $color === 'red' ? 'bg-red-100 text-red-800 font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300' : '',
    $color === 'green' ? 'bg-green-100 text-green-800 font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300' : '',
    $color === 'yellow' ? 'bg-yellow-100 text-yellow-800 font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300' : '',
    $color === 'indigo' ? 'bg-indigo-100 text-indigo-800 font-medium me-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300' : '',
    $color === 'purple' ? 'bg-purple-100 text-purple-800 font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300' : '',
    $color === 'pink' ? 'bg-pink-100 text-pink-800 font-medium me-2 px-2.5 py-0.5 rounded dark:bg-pink-900 dark:text-pink-300' : '',
    $size === 'default' ? 'text-xs' : '',
    $size === 'large' ? 'text-sm' : '',
    $bordered ? 'border border-blue-400' : '',
])]) }}>
    {{ $slot }}
</span>
