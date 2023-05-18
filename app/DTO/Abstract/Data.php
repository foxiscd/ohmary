<?php

namespace App\DTO\Abstract;

use Spatie\DataTransferObject\DataTransferObject;
use Illuminate\Contracts\Support\Responsable;

abstract class Data extends DataTransferObject implements Responsable
{
    public function toResponse($request): string
    {
        return json_encode($this);
    }
}
