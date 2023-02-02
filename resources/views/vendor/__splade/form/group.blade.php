<div {{ $attributes->only(['v-if', 'v-show', 'class'])->merge([
    'data-validation-key' => $validationKey(),
])->class([
    'row' => $inline,
]) }}>
    @includeWhen($label, 'splade::form.label', ['label' => $label, 'inline' => $inline])

    <div {{ $attributes->except(['v-if', 'v-show', 'class'])->class([
        'col-sm-10' => $inline,
        'col-sm-12' => !$inline,
    ]) }}
    >
        {{ $slot }}

        @includeWhen($help, 'splade::form.help', ['help' => $help])
        @includeWhen($showErrors, 'splade::form.error', ['name' => $validationKey()])
    </div>
</div>
