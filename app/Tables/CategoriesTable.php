<?php

namespace App\Tables;

use App\Models\Category;
use App\Models\Good;
use App\Models\News;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CategoriesTable extends AbstractTable
{
    protected Request $request;

    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Determine if the category is authorized to perform bulk actions and exports.
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

        $query = QueryBuilder::for(Category::class)
            ->defaultSort('id')
            ->allowedSorts(['id'])
            ->allowedFilters(['id', $globalSearch]);

        $type = match ($this->request->route('category_type')) {
            'news' => News::class,
            'products' => Product::class,
            'goods' => Good::class,
            'services' => Service::class,
        };

        if ($type) {
            $query->where('model_type', $type);
        }

        return $query->paginate();
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
            ->column('image_preview')
            ->column('name')
            ->column('actions')
            ->withGlobalSearch()
            ->bulkAction(label: __('Delete'), each: function ($item) {
                $item->delete();
            }, confirm: true)
            ->export()
            ->paginate();
    }
}
