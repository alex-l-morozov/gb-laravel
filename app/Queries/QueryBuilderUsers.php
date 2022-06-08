<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderUsers implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return User::query();
    }

    public function getUsers(): LengthAwarePaginator
    {
        return User::select(['id', 'name', 'email', 'is_admin', 'created_at'])
            ->paginate(10);
    }

    public function getUserById(int $id)
    {
        return User::select(['id', 'name', 'email', 'is_admin', 'created_at'])
            ->findOrFail($id);
    }
}
