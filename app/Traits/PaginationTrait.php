<?php


namespace App\Traits;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

trait PaginationTrait
{
    public function separate(LengthAwarePaginator $paginator)
    {
        $separate = [];
        if ($paginator instanceof LengthAwarePaginator){
            $result = $paginator->toArray();
            $separate = [
                'data' => data_get($result,'data'),
                'pagination' => [
                    'page_limit' => data_get($result,'per_page'),
                    'page' => data_get($result,'current_page'),
                    'page_total' => data_get($result,'last_page'),
                    'total' => data_get($result,'total'),
                ],
            ];
        }
        return $separate;
    }
}