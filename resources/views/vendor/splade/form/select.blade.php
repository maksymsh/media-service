@props([
    'inline' => true,
])

<SpladeSelect
    {{ $attributes->only(['v-if', 'v-show', 'class'])->class([
        'row' => true,
        'mb-3' => true,
    ]) }}
    :choices="@js($choicesOptions())"
    :js-choices-options="{!! $jsChoicesOptions() !!}"
    :multiple="@js($multiple)"
    :placeholder="@js($placeholderOption()?->toArray() ?: false)"
    v-model="{{ $vueModel() }}"
    :dusk="@js($attributes->get('dusk'))"
    :remote-url="{!! $remoteUrl ?: 'null' !!}"
    :remote-root="@js($remoteRoot ?: null)"
    :option-value="@js($optionValue)"
    :option-label="@js($optionLabel)"
>
    <template #default="{!! $scope !!}">
        @includeWhen($label, 'splade::form.label', ['label' => $label, 'inline' => $inline])

        <div class="{{ $inline ? 'col-sm-10' : 'col-sm-12' }}">
            <div v-bind:class="{ 'opacity-50': select.loading }">
                <select {{ $attributes->except(['v-if', 'v-show', 'class'])->class([
                    'form-control' => true,
                ])->merge([
                    'multiple' => $multiple,
                    'name' => $name,
                    'v-model' => $choicesOptions() ? null : $vueModel(),
                    'data-validation-key' => $validationKey(),
                ]) }} >
                    @if(trim($slot))
                        {{ $slot }}
                    @else
                        @foreach($options() as $selectChild)
                            @include('splade::form.select-child', ['selectChild' => $selectChild])
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="absolute inset-0 w-full h-full" v-if="select.loading">
                <div class="flex flex-row items-center justify-center w-full h-full">
                    <svg
                        class="animate-spin mr-3 h-5 w-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    >
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" />
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z" />
                    </svg>
                </div>
            </div>

            @includeWhen($help, 'splade::form.help', ['help' => $help])
            @includeWhen($showErrors, 'splade::form.error', ['name' => $validationKey()])
        </div>
    </template>
</SpladeSelect>
