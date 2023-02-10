<?php

namespace App\Services;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Spatie\QueryBuilder\QueryBuilder;

abstract class BaseService
{
    abstract public function query(array $options = []): Builder|QueryBuilder;

    abstract public function get(array $filters = [], bool $paginate = true): Collection|LengthAwarePaginator;

    abstract public function findById(int $id): Model;

    abstract public function create(array $data): Model;

    abstract public function update(Model $model, array $data): Model;

    abstract public function delete(Model $model): Model;

    abstract public function restore(Model $model): Model;
}
