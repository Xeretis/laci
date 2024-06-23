@props(['size' => 'default', 'percentage'])

<div {{ $attributes->merge(['class' => implode(' ', [
    'w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700',
    $size === 'default' ? 'h-2.5' : '',
    $size === 'small' ? 'h-1.5' : '',
    $size === 'large' ? 'h-4' : '',
])]) }}>
    <div @class([
        'bg-blue-600 rounded-full',
        'h-2.5' => $size === 'default',
        'h-1.5' => $size === 'small',
        'h-4' => $size === 'large',
    ]) style="width: {{ $percentage }}%"></div>
</div>

