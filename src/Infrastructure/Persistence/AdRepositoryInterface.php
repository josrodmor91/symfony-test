<?php


namespace App\Infrastructure\Persistence;


use App\Domain\Ad;

interface AdRepositoryInterface
{
    /**
     * @return Ad[]
     */
    public function findAll(): array;

    /**
     * @return Ad[]
     */
    public function findRelevantsOrdered(): array;

    /**
     * @return Ad[]
     */
    public function findIrrelevants(): array;

    /**
     * @param Ad $ad
     */
    public function store(Ad $ad): void;
}