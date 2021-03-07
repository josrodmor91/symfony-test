<?php


namespace App\Tests\functional;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class RetrieveGitHubFollowersCommandTest extends KernelTestCase
{
    public function testExecuteCommandWithValidValues(): void
    {
        $kernel = static::createKernel();
        $application = new Application($kernel);
        $application->setAutoExit(false);

        $command = $application->find('retrieveGitHubFollowersCommand');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
                                    'username' => 'fabpot',
                                ]);

        // the output of the command in the console
        $output = $commandTester->getDisplay();
        self::assertStringContainsString('fabpot', $output);
    }

    public function testExecuteCommandWithNotValidValues(): void
    {
        $kernel = static::createKernel();
        $application = new Application($kernel);
        $application->setAutoExit(false);

        $command = $application->find('retrieveGitHubFollowersCommand');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
                                    'username' => '',
                                ]);

        // the output of the command in the console
        $output = $commandTester->getDisplay();
        self::assertStringContainsString('Not valid value provided', $output);
    }

    public function testExecuteCommandWithNoParameter(): void
    {
        $kernel = static::createKernel();
        $application = new Application($kernel);
        $application->setAutoExit(false);

        $command = $application->find('retrieveGitHubFollowersCommand');
        $commandTester = new CommandTester($command);

        $this->expectException(\RuntimeException::class);
        $this->expectErrorMessage('Not enough arguments (missing: "username")');

        $commandTester->execute([]);
    }

    public function setUp(): void
    {
        parent::setUp();
    }
}