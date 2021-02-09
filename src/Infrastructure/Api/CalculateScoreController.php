<?php

declare(strict_types=1);

namespace App\Infrastructure\Api;

use App\Commands\CalculateScore\CalculateScoreCommand;
use App\Infrastructure\Exceptions\NotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Messenger\MessageBusInterface;

final class CalculateScoreController extends AbstractController
{
    private MessageBusInterface $commandBus;

    public function __construct(MessageBusInterface $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function __invoke(): JsonResponse
    {
        try{
            $calculateScoreCommand = new CalculateScoreCommand();
            $this->commandBus->dispatch($calculateScoreCommand);
        }catch (NotFoundException $exception){
            return new JsonResponse([], 404);
        }

        return new JsonResponse([]);
    }
}
