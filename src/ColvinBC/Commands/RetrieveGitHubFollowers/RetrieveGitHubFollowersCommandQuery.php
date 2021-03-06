<?php


namespace App\ColvinBC\Commands\RetrieveGitHubFollowers;


class RetrieveGitHubFollowersCommandQuery
{
    private string $username;

    /**
     * RetrieveGitHubFollowersCommandQuery constructor.
     * @param string $username
     */
    public function __construct(string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

}