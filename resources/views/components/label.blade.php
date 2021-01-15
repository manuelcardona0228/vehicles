@props(['value'])

<label {{ $attributes->merge(['class' => 'block uppercase font-bold text-xs text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
