<?php

namespace App\DTO\Abstract;

use App\DTO\Abstract\Classes\Meta;
use Illuminate\Http\Request;
use Spatie\DataTransferObject\DataTransferObject;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Support\Responsable;

abstract class DataList extends DataTransferObject implements Responsable
{
    public array $data;
    public ?Meta $meta = null;

    public function __construct(...$args)
    {
        $this->meta = new Meta();

        if (!empty($args['data']) && $args['data'] instanceof LengthAwarePaginator) {
            $this->fillPaginate($args['data']);
        }

        parent::__construct(['data' => $this->data, 'meta' => $this->meta]);
    }

    private function fillPaginate($data)
    {
        $this->meta->currentPage = $data->currentPage();
        $this->meta->lastPage = $data->lastPage();
        $this->meta->path = $data->path();
        $this->meta->perPage = $data->perPage();
        $this->meta->total = $data->total();
        $this->data = $data->collect()->toArray();
    }

    public function toResponse($request)
    {
        return response([$this]);
    }
}
