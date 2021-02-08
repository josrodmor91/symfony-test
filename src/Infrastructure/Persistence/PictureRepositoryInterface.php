<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Picture;

interface PictureRepositoryInterface
{
    public function findByIdOrFail(int $id): Picture;
}