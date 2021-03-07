<?php


namespace App\OtherBC\Commands\QualityListing;

use App\OtherBC\Infrastructure\Api\QualityAd;
use App\OtherBC\Infrastructure\Exceptions\NotFoundException;
use App\OtherBC\Infrastructure\Persistence\AdRepositoryInterface;
use App\OtherBC\Infrastructure\Persistence\PictureRepositoryInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class QualityListingHandlerQuery implements MessageHandlerInterface
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
     * @param QualityListingCommandQuery $commandQuery
     * @return array
     * @throws NotFoundException
     */
    public function __invoke(QualityListingCommandQuery $commandQuery): array
    {
        $result = [];
        foreach ($this->adRepository->findIrrelevants() as $ad) {
            $pictureUrls = [];
            foreach ($ad->getPictures() as $pictureId) {
                $pictureUrls[] = $this->pictureRepository->findByIdOrFail($pictureId)->getUrl();
            }

            $result[] = new QualityAd(
                $ad->getId(),
                $ad->getTypology(),
                $ad->getDescription(),
                $pictureUrls,
                $ad->getHouseSize(),
                $ad->getGardenSize(),
                $ad->getScore(),
                $ad->getIrrelevantSince()
            );
        }
        return $result;
    }
}