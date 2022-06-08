<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Upload;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderUpload implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return Upload::query();
    }

    public function getFeedback(): LengthAwarePaginator
    {
        return Upload::select(['id', 'name', 'phone', 'email', 'description', 'created_at'])
            ->paginate(10);
    }

    public function getFeedbackById(int $id)
    {
        return Upload::select(['id', 'name', 'phone', 'email', 'description', 'created_at'])
            ->findOrFail($id);
    }
}
