<?php


namespace App\ColvinBC\Infraestructure;


use App\ColvinBC\Domain\FollowBacks;
use App\ColvinBC\Exception\NotValidStatusReponseInRepositoryException;
use App\ColvinBC\Exception\ResponseNotValidException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;

class GitHubRepository extends Client implements GitHubRepositoryInterface
{
    //Move this to .env file or environment variables file
    private const GIT_HUB_URL = 'https://api.github.com/';
    private const GET_STATUS_OK = 200;

    /**
     * @param string $username
     * @return FollowBacks
     * @throws JsonException
     * @throws NotValidStatusReponseInRepositoryException
     * @throws ResponseNotValidException
     */
    public function findFollowersByUsernameOrFail(string $username): FollowBacks
    {

        $url = self::GIT_HUB_URL . 'users/' . $username . '/followers';
        try {
            $reponse = $this->request(
                'GET',
                $url
            );
        } catch (GuzzleException $exception) {
            throw new NotValidStatusReponseInRepositoryException(
                    'GET ' . $url . ' returns a ' . $exception->getCode(
                ) . ' code and message ' . $exception->getMessage()
            );
        }
        $arrayReponse = json_decode($reponse->getBody()->getContents(), false, 512, JSON_THROW_ON_ERROR) ?? [];
        return FollowBacks::createFollowBackFromGitHubReponseBody($arrayReponse);

    }
}