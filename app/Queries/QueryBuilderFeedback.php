<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Feedback;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderFeedback implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return Feedback::query();
    }

    public function getFeedback(): LengthAwarePaginator
    {
        return Feedback::select(['id', 'name', 'description', 'created_at'])
            ->paginate(10);
    }

    public function getFeedbackById(int $id)
    {
        return Feedback::select(['id', 'name', 'description', 'created_at'])
            ->findOrFail($id);
    }
}
