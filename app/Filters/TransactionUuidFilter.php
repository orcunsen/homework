<?php

namespace App\Filters;

use App\Filters\FilterInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TransactionUuidFilter implements FilterInterface
{
    public function apply(Request $request, Builder $query, mixed $value = null): Builder
    {
        return $query->where('transaction_id', $value);
    }
}