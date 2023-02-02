@props([
    'as' => 'button'
])

<x-splade-component is="button-with-dropdown" :as="$as" dusk="filters-dropdown">
    <x-slot:button>
        @lang('Filters')
        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 20 20" fill="currentColor"
             :class="{}"
        >
            <path fill-rule="evenodd"
                  d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                  clip-rule="evenodd"/>
        </svg>
    </x-slot:button>

    <div
        role="menu"
        aria-orientation="horizontal"
        aria-labelledby="filter-menu"
    >
        @foreach($table->filters() as $filter)
            <div>
                <h3 class="">
                    {{ $filter->label }}
                </h3>

                <x-splade-form>
                    @if($filter->type === 'select')
                        <x-splade-select
                            name="filter_{{ $filter->key }}"
                            class=""
                            @change="table.updateQuery('filter[{{ $filter->key }}]', $event.target.value)"
                        >
                            @foreach($filter->options() as $optionKey => $option)
                                <option
                                    @selected($filter->hasValue() && $filter->value == $optionKey) value="{{ $optionKey }}">
                                    {{ $option }}
                                </option>
                            @endforeach
                        </x-splade-select>
                    @endif
                </x-splade-form>
            </div>
        @endforeach
    </div>
</x-splade-component>
