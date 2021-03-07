<?php


namespace App\Commands;

use App\ColvinBC\Commands\RetrieveGitHubFollowers\RetrieveGitHubFollowersCommandQuery;
use App\ColvinBC\Domain\User;
use Exception;
use JsonException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBus;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;

class RetrieveGitHubFollowersCommand extends Command
{

    /**
     * This class command should be in ColvinBC but I putted here to avoid touch in services.yaml or similar to configure commands in differnts paths
     */
    public const COMMAND_NAME = 'retrieveGitHubFollowersCommand';
    public MessageBusInterface $messageBus;

    protected function configure(): void
    {
        $this->addArgument('username', InputArgument::REQUIRED, 'The username reposotory identifier.');
    }

    public function __construct(MessageBusInterface $messageBus)
    {
        parent::__construct(self::COMMAND_NAME);
        //Not sure about the behaviour of commandBus in symfony. Better in a middleware who take the correct implementation
        $this->messageBus = $messageBus ?? new MessageBus();
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
        $command = new RetrieveGitHubFollowersCommandQuery($username);

        try {
            $response = json_encode($this->sendMessageAndGetResponse($command), JSON_THROW_ON_ERROR);
        }catch (Exception $exception){
            $response = 'Not valid value provided';
        }
        $output->writeln($response);
        return Command::SUCCESS;
    }

    /**
     * @param $command
     * @return mixed
     */
    private function sendMessageAndGetResponse($command): User
    {
        //Better in a middleware
        $stamp = $this->messageBus->dispatch($command)->last(HandledStamp::class);
        if (empty($stamp)) {
            throw new NotFoundHttpException();
        }
        return $stamp->getResult();
    }
}