@props(['field', 'value', 'label', 'type' => 'text', 'size' => 'default'])

<div>
    <label for="{{ $field }}" @class([
        'block mb-2 text-sm font-medium text-gray-900 dark:text-white' => !$errors->has($field),
        'block mb-2 text-sm font-medium text-red-700 dark:text-red-500' => $errors->has($field),
    ])>{{ $label }}</label>
    <input id="{{ $field }}" type="{{ $type }}" {{ $attributes }}
    @class([
        'bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' => !$errors->has($field),
        'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' => $errors->has($field),
        'p-2.5 text-sm' => $size === 'default',
        'p-2 text-xs' => $size === 'small',
        'p-4 text-base' => $size === 'large',
    ]) value="{{ old($field, $value ?? '') }}">
    @error($field)
    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>
