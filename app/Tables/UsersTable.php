<?php

namespace App\Tables;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class UsersTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct(
        protected UserService $userService
    ) {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
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
        return $this->userService->query();
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
            ->column(key: 'avatar_preview', sortable: true, searchable: true)
            ->column(key: 'name', sortable: true, searchable: true)
            ->column(key: 'username', sortable: true, searchable: true)
            ->column(key: 'email', sortable: true, searchable: true)
            ->column('actions')
            ->withGlobalSearch()
            ->bulkAction(
                label: __('Delete'),
                each: fn (User $user) => $user->delete(),
                after: fn () => Toast::info('Deleted successfully!'),
                confirm: true
            )
            ->export()
            ->paginate();
    }
}
