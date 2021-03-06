<?php

namespace App\ColvinBC\Application\Console;

use App\ColvinBC\Commands\RetrieveGitHubFollowers\RetrieveGitHubFollowersCommandQuery;
use JsonException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

class RetrieveGitHubFollowersCommand extends Command
{
    public const COMMAND_NAME = 'retrieveGitHubFollowersCommand';
    public MessageBusInterface $messageBus;

    protected function configure(): void
    {
        $this->addArgument('username', InputArgument::REQUIRED, 'The username reposotory identifier.');
    }

    public function __construct(MessageBusInterface $messageBus)
    {
        parent::__construct(self::COMMAND_NAME);
        $this->messageBus = $messageBus;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     * @throws JsonException
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $username = $input->getArgument('username');
        /*$command = new RetrieveGitHubFollowersCommandQuery($username);
        $response = $this->messageBus->dispatch($command);*/

        $output->writeln(json_encode('pepe', JSON_THROW_ON_ERROR));
        return Command::SUCCESS;
    }
}