<?php

namespace App\Tests\unit\ColvinBC\Commands;

use App\ColvinBC\Commands\RetrieveGitHubFollowers\RetrieveGitHubFollowersCommandQuery;
use App\ColvinBC\Commands\RetrieveGitHubFollowers\RetrieveGitHubFollowersHandlerQuery;
use App\ColvinBC\Domain\FollowBacks;
use App\ColvinBC\Exception\NotValidStatusReponseInRepositoryException;
use App\ColvinBC\Infraestructure\GitHubRepositoryInterface;
use App\Tests\unit\mothers\AdMother;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class RetrieveGitHubFollowersHandlerQueryTest extends TestCase
{
    /** @var GitHubRepositoryInterface|MockInterface */
    private $gitHubRepositoryInterface;
    private RetrieveGitHubFollowersHandlerQuery $handler;

    /**
     * @throws NotValidStatusReponseInRepositoryException
     */
    public function testInvokeHandlerReturnsAnUserWithFollowers(): void
    {
        $command = new RetrieveGitHubFollowersCommandQuery('username');
        $followBacks = FollowBacksMother::createFollowBacksRandom();
        $this->withGitHubRepository($followBacks);

        $response = $this->handler->__invoke($command);

        self::assertEquals('username', $response->getUserName());
        self::assertEquals($followBacks->getCount(), $response->getFollowBacks()->getCount());
    }

    /**
     * @param FollowBacks $followBacks
     */
    protected function withGitHubRepository(FollowBacks $followBacks): void
    {
        $this->gitHubRepository()
            ->method('findFollowersByUsernameOrFail')
            ->willReturn($followBacks);
    }


    /**
     * @return GitHubRepositoryInterface|MockInterface
     */
    private function gitHubRepository(): MockInterface|GitHubRepositoryInterface
    {

        if (null === $this->gitHubRepositoryInterface) {
            $this->gitHubRepositoryInterface = $this->createMock(GitHubRepositoryInterface::class);
        }
        return $this->gitHubRepositoryInterface;
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->handler = new RetrieveGitHubFollowersHandlerQuery(
            $this->gitHubRepository()
        );
    }
}