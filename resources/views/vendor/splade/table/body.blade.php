<tbody class="sortable" data-type="{{ isset($table->resource[0]) ?  $table->resource[0]::class : '' }}">
    @foreach($table->resource as $itemKey => $item)
        @php $itemPrimaryKey = $table->findPrimaryKey($item) @endphp

        <tr data-id="{{ $item->id }}"
            @if($table->rowLinks->has($itemKey))
                class=""
                @click="(event) => table.visit(@js($table->rowLinks->get($itemKey)), @js($table->rowLinkType), event)"
            @endif
            :class="{}"
        >
            @if($hasBulkActions = $table->hasBulkActions())
                <td width="64" class="">
                    <input
                        @change="(e) => table.setSelectedItem(@js($itemPrimaryKey), e.target.checked)"
                        :checked="table.itemIsSelected(@js($itemPrimaryKey))"
                        :disabled="table.allItemsFromAllPagesAreSelected"
                        class=""
                        name="table-row-bulk-action"
                        type="checkbox"
                        value="{{ $itemPrimaryKey }}"
                    />
                </td>
            @endif

            @foreach($table->columns() as $column)
                <td
                    v-show="table.columnIsVisible(@js($column->key))"
                    class=""
                >
                    @switch($column->key)
                        @case('published')
                            @include('components.admin.row-published', ['item' => $item])
                            @break
                        @case('actions')
                            @include('components.admin.row-actions', ['item' => $item])
                            @break
                        @default
                            @isset(${'spladeTableCell' . $column->keyHash()})
                                {{ ${'spladeTableCell' . $column->keyHash()}($item, $itemKey) }}
                            @else
                                {!! e($getColumnDataFromItem($item, $column)) !!}
                            @endisset
                    @endswitch
                </td>
            @endforeach
        </tr>
    @endforeach
</tbody>
