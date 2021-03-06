<?php


namespace App\Tests\integration;


use App\ColvinBC\Exception\NotValidStatusReponseInRepositoryException;
use App\ColvinBC\Infraestructure\GitHubRepository;
use PHPUnit\Framework\TestCase;

class GitHubRepositoryTest extends TestCase
{
    private GitHubRepository $repositoryUnderTest;

    public function testConnectionValidWithGitHub(){
        //Given
        $validUsername = 'fabpot';

        //When
        $response = $this->repositoryUnderTest->findFollowersByUsernameOrFail($validUsername);

        //Then
        self::assertObjectHasAttribute('count', $response);
        self::assertObjectHasAttribute('userNames', $response);
    }

    public function testConnectionNotValidWithGitHub(): void
    {
        //Given
        $notValidUsername = 'notValidUser'.random_bytes(10);

        //Then
        $this->expectException(NotValidStatusReponseInRepositoryException::class);

        //When
        $this->repositoryUnderTest->findFollowersByUsernameOrFail($notValidUsername);
    }

    public function setUp(): void
    {
        $this->repositoryUnderTest = new GitHubRepository();
        parent::setUp();
    }
}