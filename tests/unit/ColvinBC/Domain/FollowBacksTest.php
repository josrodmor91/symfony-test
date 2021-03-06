<?php


namespace App\Tests\unit\ColvinBC\Domain;

use App\ColvinBC\Domain\FollowBacks;
use PHPUnit\Framework\TestCase;

class FollowBacksTest extends TestCase
{
    private array $gitHubResponse;

    public function testCreateFollowBackFromGitHubReponseBody(): void
    {
        $followBacks = FollowBacks::createFollowBackFromGitHubReponseBody($this->gitHubResponse);
        self::assertEquals(30, $followBacks->getCount());
        self::assertCount(30, $followBacks->getUserNames());
        self::assertEquals('jenkoian', $followBacks->getUserNames()[0]);
    }

    public function setUp(): void
    {
        $this->gitHubResponse = GitHubRepositoryProvider::retrieveFollowersBodyReponseFromGitHub();
        parent::setUp();
    }
}