<?php


namespace App\Commands\CalculateScore;

use App\Infrastructure\Exceptions\NotFoundException;
use App\Infrastructure\Persistence\AdRepositoryInterface;
use App\Infrastructure\Persistence\PictureRepositoryInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class CalculateScoreHandler implements MessageHandlerInterface
{
    private AdRepositoryInterface $adRepository;
    private PictureRepositoryInterface $pictureRepository;

    public function __construct(
        AdRepositoryInterface $adRepository,
        PictureRepositoryInterface $pictureRepository
    ){
        $this->adRepository = $adRepository;
        $this->pictureRepository = $pictureRepository;
    }

    /**
     * @param CalculateScoreCommand $calculateScoreCommand
     * @throws NotFoundException
     */
    public function __invoke(CalculateScoreCommand $calculateScoreCommand){
        foreach ($this->adRepository->findAll() as $ad){
            $pictures = [];
            foreach ($ad->getPictures() as $pictureId){
                $pictures[] = $this->pictureRepository->findByIdOrFail($pictureId);
            }
            $ad->setScore($pictures);
            $this->adRepository->store($ad);
        }
    }
}