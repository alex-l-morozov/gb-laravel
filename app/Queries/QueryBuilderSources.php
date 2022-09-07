<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Sources;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderSources implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return Sources::query();
    }

    public function getSources()
    {
        return Sources::select(['id', 'title', 'description', 'link'])->get();
    }

    public function getSourceById(int $id)
    {
        return Sources::select(['id', 'title', 'description', 'link'])
            ->findOrFail($id);
    }
}
