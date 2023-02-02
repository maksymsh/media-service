@props([
    'as' => 'button'
])

<x-splade-component is="button-with-dropdown" :as="$as" dusk="columns-dropdown">
    <x-slot:button>
        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 20 20" fill="currentColor"
             :class="{}">
            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
            <path fill-rule="evenodd"
                  d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                  clip-rule="evenodd"></path>
        </svg>
    </x-slot:button>

    <div class="">
        <ul class="divide-y divide-gray-200">
            @foreach($table->columns() as $column)
                @if(!$column->canBeHidden)
                    @continue
                @endif

                <li class="">
                    <p class="">
                        {{ $column->label }}
                    </p>

                    <button
                        type="button"
                        class=""
                        :class="{}"
                        :aria-pressed="table.columnIsVisible(@js($column->key))"
                        aria-labelledby="toggle-column-{{ $column->key }}"
                        aria-describedby="toggle-column-{{ $column->key }}"
                        @click.prevent="table.toggleColumn(@js($column->key))"
                        dusk="toggle-column-{{ $column->key }}"
                    >
                        <span class="">Column status</span>
                        <span
                            aria-hidden="true"
                            :class="{}"
                            class="" />
                    </button>
                </li>
            @endforeach
        </ul>
    </div>
</x-splade-component>
