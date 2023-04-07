<?php

namespace App\Tables;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class AttributesTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the attribute is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function (Builder $query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query->orWhere('id', $value);
                });
            });
        });

        return QueryBuilder::for(Attribute::class)
            ->defaultSort('id')
            ->allowedSorts(['id'])
            ->allowedFilters(['id', $globalSearch]);
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param  SpladeTable  $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table->column(key: 'id', sortable: true)
            ->column('name')
            ->column('actions')
            ->withGlobalSearch()
            ->bulkAction(
                label: __('Delete'),
                each: fn (Attribute $user) => $user->delete(),
                after: fn () => Toast::info('Deleted successfully!'),
                confirm: true
            )
            ->bulkAction(label: __('Replicate'), each: function ($item) {
                $replicated = $item->replicate();
                $replicated->push();
            }, confirm: true)
            ->export()
            ->paginate();
    }
}
