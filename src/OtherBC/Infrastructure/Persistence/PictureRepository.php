<?php


namespace App\OtherBC\Infrastructure\Persistence;


use App\OtherBC\Domain\Picture;

class PictureRepository implements PictureRepositoryInterface
{

    public function findByIdOrFail(int $id): Picture
    {
        // TODO: Implement findByIdOrFail() method.
    }
}