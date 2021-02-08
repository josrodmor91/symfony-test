<?php


namespace App\Commands\QualityListing;

use App\Infrastructure\Api\QualityAd;
use App\Infrastructure\Persistence\AdRepositoryInterface;
use App\Infrastructure\Persistence\PictureRepositoryInterface;

class QualityListingHandlerQuery
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