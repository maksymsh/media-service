@props([
    'as' => 'button',
])

<SpladeDropdown {{ $attributes->except('class')
    ->mergeVueBinding(':inline', $inline)
    ->mergeVueBinding(':teleport', $teleport)
    ->mergeVueBinding(':close-on-click', $closeOnClick)
}} :splade-id="@js($spladeId)">
    <template #button="dropdown">
        @if($as === 'button')
            <button type="button"
                    aria-haspopup="true"
                    {{ $attributes->only('class')->when($inline && !$attributes->has('class'), fn($attributes) => $attributes->class('inline')) }}
                    :class="{ 'cursor-not-allowed': dropdown.disabled }"
                    :disabled="dropdown.disabled"
                    @click.prevent="dropdown.toggle"
            >
                {{ $trigger }}
            </button>
        @endif
        @if($as === 'a')
            <a aria-haspopup="true"
               {{ $attributes->only('class')->when($inline && !$attributes->has('class'), fn($attributes) => $attributes->class('inline')) }}
               :class="{ 'cursor-not-allowed': dropdown.disabled }"
               @click.prevent="dropdown.toggle"
            >
                {{ $trigger }}
            </a>
        @endif
    </template>

    <template #default="dropdown">
        <x-splade-component :is="$teleport ? 'teleport' : 'slot'" to="body">
            <div data-splade-dropdown-id="{{ $spladeId }}" class="absolute z-40">
                <x-splade-component is="transition" show="dropdown.opened">
                    {{ $slot }}
                </x-splade-component>
            </div>
        </x-splade-component>
    </template>
</SpladeDropdown>
