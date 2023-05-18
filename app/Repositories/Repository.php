<?php

namespace App\Repositories;

abstract class Repository
{
    public static function new(...$params): static
    {
        return new static(...$params);
    }
}
