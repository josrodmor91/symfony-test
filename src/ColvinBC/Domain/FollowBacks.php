<?php


namespace App\ColvinBC\Domain;


class FollowBacks
{
    private int $count;
    private array $userNames;

    /**
     * FollowBacks constructor.
     * @param int $count
     * @param array $userNames
     */
    public function __construct(int $count, array $userNames)
    {
        $this->count = $count;
        $this->userNames = $userNames;
    }

    /**
     * @param array $gitHubReponse
     * @return FollowBacks
     */
    public static function createFollowBackFromGitHubReponseBody(array $gitHubReponse): FollowBacks
    {

        $countFollowers = 0;
        $names = [];
        foreach ($gitHubReponse as $followerValues){
            $countFollowers++;
            $names[] = $followerValues->login;
        }

        return new self($countFollowers, $names);
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return array
     */
    public function getUserNames(): array
    {
        return $this->userNames;
    }
}