<thead class="">
    <tr>
        @if($hasBulkActions = $table->hasBulkActions())
            <th width="64" class="">
                @include('splade::table.select-rows-dropdown', ['as' => 'a'])
            </th>
        @endif

        @foreach($table->columns() as $column)
            <th
                v-show="table.columnIsVisible(@js($column->key))"
                class=""
            >
                @if($column->sortable)
                    <Link keep-modal dusk="sort-{{ $column->key }}" href="{{ $sortBy($column) }}">
                @endif

                <span class="">
                    <span class="">{{ $column->label }}</span>

                    @if($column->sortable)
                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-1" style="width:1em;height:1em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            @if(!$column->sorted)
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                            @elseif($column->sorted === 'asc')
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6" />
                            @elseif($column->sorted === 'desc')
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 0v12m0 0l4-4m-4 4l-4-4" />
                            @endif
                        </svg>
                    @endif
                </span>

                @if($column->sortable)
                    </Link>
                @endif
            </th>
        @endforeach
    </tr>
</thead>
