@props([
    'inline' => true,
    'wysiwyg' => false,
])

<SpladeTextarea
    {{ $attributes->only(['v-if', 'v-show', 'class'])->class([
        'mb-3' => true,
        'row' => $inline,
    ]) }}
    :autosize="@js($attributes->has('autosize') ? (bool) $attributes->get('autosize') : $defaultAutosizeValue)"
    v-model="{{ $vueModel() }}"
>
    @includeWhen($label, 'splade::form.label', ['label' => $label, 'inline' => $inline])

    <div class="{{ $inline ? 'col-sm-10' : 'col-sm-12' }}">

        <textarea id="{{ $name }}" {{ $attributes->except(['v-if', 'v-show', 'class', 'autosize'])->merge([
                'rows' => $wysiwyg ? 20 : 10,
            ])->class([
                'form-control' => true,
                'wysiwyg' => $wysiwyg,
            ]
        )->merge([
            'name' => $name,
            'v-model' => $vueModel(),
            'data-validation-key' => $validationKey(),
        ]) }}
        />

        @includeWhen($help, 'splade::form.help', ['help' => $help])
        @includeWhen($showErrors, 'splade::form.error', ['name' => $validationKey()])
    </div>
</SpladeTextarea>
