@props([
    'switch' => false,
])

<div {{ $attributes->only(['v-if', 'v-show', 'class', 'switch'])->class(['mb-3', 'form-switch' => $switch]) }}>
    <label class="form-check">
        <input {{ $attributes->except(['v-if', 'v-show', 'class'])->class('form-check-input')->merge([
            'name' => $name,
            'value' => $value,
            'type' => 'checkbox',
            'v-model' => $vueModel(),
            'data-validation-key' => $validationKey(),
        ]) }} :true-value="@js($value)" :false-value="@js($falseValue)" />
        @if(trim($slot))
            <span class="form-check-label">{!! $slot !!}</span>
        @else
            <span class="form-check-label">{!! $label !!}</span>
        @endif
    </label>

    @includeWhen($help, 'splade::form.help', ['help' => $help])
    @includeWhen($showErrors, 'splade::form.error', ['name' => $validationKey()])
</div>
