<?php


namespace App\ColvinBC\Infraestructure;


use App\ColvinBC\Domain\FollowBacks;
use App\ColvinBC\Exception\NotValidStatusReponseInRepositoryException;
use App\ColvinBC\Exception\ResponseNotValidException;

interface GitHubRepositoryInterface
{

    /**
     * @param string $username
     * @return FollowBacks
     * @throws JsonException
     * @throws NotValidStatusReponseInRepositoryException
     * @throws ResponseNotValidException
     */
    public function findFollowersByUsernameOrFail(string $username): FollowBacks;
}