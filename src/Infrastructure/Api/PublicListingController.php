<?php

declare(strict_types=1);

namespace App\Infrastructure\Api;

use App\Commands\PublicListing\PublicListingCommandQuery;
use App\Infrastructure\Exceptions\NotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Messenger\MessageBusInterface;

final class PublicListingController extends AbstractController
{
    private MessageBusInterface $commandBus;

    public function __construct(MessageBusInterface $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function __invoke(): JsonResponse
    {
        try{
            $publiListingCommand = new PublicListingCommandQuery();
            $this->commandBus->dispatch($publiListingCommand);
        }catch (NotFoundException $exception){
            return new JsonResponse([], 404);
        }
        return new JsonResponse([]);
    }
}
