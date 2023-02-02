<div
    v-show="@js($searchInput->value !== null) || table.isForcedVisible(@js($searchInput->key))"
    class=""
>
    <div class="">
        <label
            for="{{ $searchInput->key }}"
            class=""
        >
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 20 20"
                 fill="currentColor">
                <path fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"/>
            </svg>

            <span>{{ $searchInput->label }}</span>
        </label>

        <input
            name="searchInput-{{ $searchInput->key }}"
            value="{{ $searchInput->value }}"
            type="text"
            class=""
            v-bind:class="{ 'opacity-50': table.isLoading }"
            v-bind:disabled="table.isLoading"
            @input="table.debounceUpdateQuery('filter[{{ $searchInput->key }}]', $event.target.value, $event.target)"
        />

        <div class="">
            <button
                class=""
                @click.prevent="table.disableSearchInput(@js($searchInput->key))"
                dusk="remove-search-row-{{ $searchInput->key }}"
            >
                <span class="">{{ __('Remove search') }}</span>

                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
</div>
