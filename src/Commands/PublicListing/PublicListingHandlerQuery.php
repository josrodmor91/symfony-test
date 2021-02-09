<?php


namespace App\Commands\PublicListing;


use App\Infrastructure\Api\PublicAd;
use App\Infrastructure\Exceptions\NotFoundException;
use App\Infrastructure\Persistence\AdRepositoryInterface;
use App\Infrastructure\Persistence\PictureRepositoryInterface;

class PublicListingHandlerQuery
{
    private AdRepositoryInterface $adRepository;
    private PictureRepositoryInterface $pictureRepository;

    public function __construct(
        AdRepositoryInterface $adRepository,
        PictureRepositoryInterface $pictureRepository
    ) {
        $this->adRepository = $adRepository;
        $this->pictureRepository = $pictureRepository;
    }

    /**
     * @param PublicListingCommandQuery $commandQuery
     * @return array
     * @throws NotFoundException
     */
    public function __invoke(PublicListingCommandQuery $commandQuery): array
    {
        $result = [];
        foreach ($this->adRepository->findRelevantsOrdered() as $ad) {
            $pictureUrls = [];
            foreach ($ad->getPictures() as $pictureId) {
                $pictureUrls[] = $this->pictureRepository->findByIdOrFail($pictureId)->getUrl();
            }

            $result[] = new PublicAd(
                $ad->getId(),
                $ad->getTypology(),
                $ad->getDescription(),
                $pictureUrls,
                $ad->getHouseSize(),
                $ad->getGardenSize()
            );
        }
        return $result;
    }
}