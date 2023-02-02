@props([
    'inline' => true,
])

<SpladeInput
    {{ $attributes->only(['v-if', 'v-show', 'class'])->class([
        'mb-3' => true,
        'row' => $inline,
        'hidden' => $isHidden(),
    ]) }}
    :flatpickr="@js($flatpickrOptions())"
    :js-flatpickr-options="{!! $jsFlatpickrOptions !!}"
    v-model="{{ $vueModel() }}"
    #default="inputScope"
>
    @includeWhen($label, 'splade::form.label', ['label' => $label, 'inline' => $inline])

    <div class="{{ $inline ? 'col-sm-10' : 'col-sm-12' }}">
        @if($prepend)
            <span :class="{ 'opacity-50': inputScope.disabled && @json(!$alwaysEnablePrepend) }"
                  class="inline-flex items-center px-3 rounded-l-md border border-t-0 border-b-0 border-l-0 border-gray-300 bg-gray-50 text-gray-500">
                {!! $prepend !!}
            </span>
        @endif

        <input {{ $attributes->except(['v-if', 'v-show', 'class'])->class([
            'form-control' => true,
        ])->merge([
            'name' => $name,
            'type' => $type,
            'v-model' => $flatpickrOptions() ? null : $vueModel(),
            'data-validation-key' => $validationKey(),
        ]) }}
               :class="{'is-invalid': form.hasError(@js($name))}"
        />

        @if($append)
            <span :class="{ 'opacity-50': inputScope.disabled && @json(!$alwaysEnableAppend) }" class="">
                {!! $append !!}
            </span>
        @endif

        @include('splade::form.help', ['help' => $help])
        @includeWhen($showErrors, 'splade::form.error', ['name' => $validationKey()])
    </div>
</SpladeInput>
