<div class="relative mb-4">
    <label for="{{ $for }}" class="leading-7 text-sm text-gray-400 block">{{ $label }}</label>
    {{ $slot }}
    @if(isset($error))
        <p class="text-red-500 text-sm">
            {{ $error }}
        </p>
    @endif
</div>