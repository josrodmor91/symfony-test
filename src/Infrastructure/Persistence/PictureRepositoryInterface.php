<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Picture;
use App\Infrastructure\Exceptions\NotFoundException;

interface PictureRepositoryInterface
{
    /**
     * @param int $id
     * @return Picture
     * @throws NotFoundException
     */
    public function findByIdOrFail(int $id): Picture;
}