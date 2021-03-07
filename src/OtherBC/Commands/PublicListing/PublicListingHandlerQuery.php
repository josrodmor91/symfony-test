<?php


namespace App\OtherBC\Commands\PublicListing;


use App\OtherBC\Infrastructure\Api\PublicAd;
use App\OtherBC\Infrastructure\Exceptions\NotFoundException;
use App\OtherBC\Infrastructure\Persistence\AdRepositoryInterface;
use App\OtherBC\Infrastructure\Persistence\PictureRepositoryInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class PublicListingHandlerQuery implements MessageHandlerInterface
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