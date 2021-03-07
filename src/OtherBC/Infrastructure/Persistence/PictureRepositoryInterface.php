<?php

namespace App\OtherBC\Infrastructure\Persistence;

use App\OtherBC\Domain\Picture;
use App\OtherBC\Infrastructure\Exceptions\NotFoundException;

interface PictureRepositoryInterface
{
    /**
     * @param int $id
     * @return Picture
     * @throws NotFoundException
     */
    public function findByIdOrFail(int $id): Picture;
}