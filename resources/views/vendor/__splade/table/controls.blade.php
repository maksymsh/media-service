<div class="d-md-flex justify-content-between mb-3">
    <div class="d-md-flex">

        @if($table->hasExports() || $table->hasBulkActions())
            <div class="" v-if="table.hasSelectedItems || @js($table->hasExports())">
                @include('splade::table.bulk-actions-exports', ['as' => 'a'])
            </div>
        @endif

        @if($table->hasFilters())
            <div class="">
                @include('splade::table.filters', ['as' => 'a'])
            </div>
        @endif

        @if($table->searchInputs('global'))
            <div class="">
                @include('splade::table.global-search')
            </div>
        @endif

    </div>

    <div class="d-md-flex">
        <button
            v-show="@js($canResetTable()) || table.columnsAreToggled || table.hasForcedVisibleSearchInputs"
            type="button"
            class=""
            @click.prevent="table.reset"
            dusk="reset-table"
        >
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 20 20"
                 fill="currentColor">
                <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"/>
            </svg>

            <span class="">{{ __('Reset') }}</span>
        </button>

        @if($table->hasToggleableSearchInputs())
            <div class="">
                @include('splade::table.add-search-row', ['as' => 'a'])
            </div>
        @endif

        @if($table->hasToggleableColumns())
            <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                @include('splade::table.columns', ['as' => 'a'])
            </div>
        @endif
    </div>
</div>
