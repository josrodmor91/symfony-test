<?php


namespace App\ColvinBC\Commands\RetrieveGitHubFollowers;


use App\ColvinBC\Domain\User;
use App\ColvinBC\Exception\NotValidStatusReponseInRepositoryException;
use App\ColvinBC\Infraestructure\GitHubRepositoryInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class RetrieveGitHubFollowersHandlerQuery implements MessageHandlerInterface
{
    private GitHubRepositoryInterface|MockInterface $gitHubRepository;

    public function __construct(
        GitHubRepositoryInterface $gitHubRepository,
    ) {
        $this->gitHubRepository = $gitHubRepository;
    }

    /**
     * @param RetrieveGitHubFollowersCommandQuery $commandQuery
     * @return User
     * @throws NotValidStatusReponseInRepositoryException
     */
    public function __invoke(RetrieveGitHubFollowersCommandQuery $commandQuery): User
    {
        $followBacks = $this->gitHubRepository->findFollowersByUsernameOrFail($commandQuery->getUsername());
        return new User($commandQuery->getUsername(), $followBacks);
    }
}