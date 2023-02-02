<button {{ $attributes->class(
    'btn btn-primary'
)->merge([
    'type' => $type
])->when($name, fn($attr) => $attr->merge(['name' => $name, 'value' => $value])) }}
>
    @if(trim($slot))
        {{ $slot }}
    @else
        <div class="d-flex flex-row align-items-center justify-content-center">
            <svg
                v-if="@js($spinner) && form.processing"
                width="24" height="24"
                class="me-3 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            >
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                <path class="opacity-75" fill="currentColor"
                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/>
            </svg>

            <span :class="{ 'opacity-50': form.processing || form.$uploading }">
                {{ $label }}
            </span>
        </div>
    @endif
</button>
