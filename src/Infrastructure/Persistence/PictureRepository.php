<?php


namespace App\Infrastructure\Persistence;


use App\Domain\Picture;
use App\Infrastructure\Exceptions\NotFoundException;

class PictureRepository implements PictureRepositoryInterface
{

    public function findByIdOrFail(int $id): Picture
    {
        // TODO: Implement findByIdOrFail() method.
    }
}