<?php

namespace App\Services;

use App\Models\News;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class NewsService extends BaseService
{
    public function query(array $options = []): Builder|QueryBuilder
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function (Builder $query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query->orWhere('id', $value);
                });
            });
        });

        return QueryBuilder::for(News::class)
            ->defaultSort('id')
            ->allowedSorts(['id'])
            ->allowedFilters(['id', $globalSearch]);
    }

    public function get(array $filters = [], bool $paginate = true): Collection|LengthAwarePaginator
    {
        $query = $this->query();

        foreach ($filters as $key => $value) {
            $attributes = [$key, ...(explode(',', $value))];
            $query->where(...$attributes);
        }

        return $paginate ? $query->paginate() : $query->get();
    }

    public function findById(int $id): Model
    {
        return $this->query()->find($id);
    }

    public function create(array $data): Model
    {
        DB::beginTransaction();

        try {
            $news = $this->query()->create($data);

            $news->roles()->sync($data['roles'] ?? []);

            DB::commit();

            return $news;
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }

    public function update(Model $model, array $data): Model
    {
        DB::beginTransaction();

        try {
            $model->update($data);

            DB::commit();

            return $model;
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }

    public function delete(Model $model): Model
    {
        DB::beginTransaction();

        try {
            $model->delete();

            DB::commit();

            return $model;
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }

    public function restore(Model $model): Model
    {
        DB::beginTransaction();

        try {
            $model->restore();

            DB::commit();

            return $model;
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }
}
