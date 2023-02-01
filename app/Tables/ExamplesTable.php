<?php

namespace App\Tables;

use App\Models\Example;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ExamplesTable extends AbstractTable
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
     * Determine if the example is authorized to perform bulk actions and exports.
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

        return QueryBuilder::for(Example::class)
            ->defaultSort('id')
            ->allowedSorts(['id'])
            ->allowedFilters(['id', $globalSearch])
            ->paginate();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param  SpladeTable  $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $roles = Role::query()->pluck('name', 'id')->toArray();

        $table->column(key: 'id', sortable: true)
            ->column(key: 'name', sortable: true, searchable: true)
            ->column(key: 'examplename', sortable: true, searchable: true)
            ->column(key: 'email', sortable: true, searchable: true)
            ->column('actions')
            ->withGlobalSearch()
            ->bulkAction(label: __('Delete'), each: function ($item) {
                $item->delete();
            }, confirm: true)
            ->export();

        // ->searchInput()
        // ->selectFilter()
        // ->withGlobalSearch()

        // ->bulkAction()
        // ->export()
    }
}
