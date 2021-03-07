<?php


namespace App\ColvinBC\Domain;


final class User
{
    public string $userName;
    public FollowBacks $followBacks;

    /**
     * User constructor.
     * @param string $userName
     * @param FollowBacks $followBacks
     */
    public function __construct(string $userName, FollowBacks $followBacks)
    {
        $this->userName = $userName;
        $this->followBacks = $followBacks;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return FollowBacks
     */
    public function getFollowBacks(): FollowBacks
    {
        return $this->followBacks;
    }

}