<?php

namespace App\Tables;

use App\Models\Page;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class PagesTable extends AbstractTable
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
     * Determine if the page is authorized to perform bulk actions and exports.
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

        $query = QueryBuilder::for(Page::class)
            ->defaultSort('id')
            ->allowedSorts(['id'])
            ->allowedFilters(['id', $globalSearch]);

        return $query;
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
            ->column('code')
            ->column('title')
            ->column('published')
            ->column('actions')
            ->withGlobalSearch()
            ->bulkAction(label: __('Delete'), each: function ($item) {
                $item->delete();
            }, confirm: true)
            ->bulkAction(label: __('Replicate'), each: function ($item) {
                $replicated = $item->replicate();
                $replicated->push();
            }, confirm: true)
            ->export()
            ->paginate();
    }
}
