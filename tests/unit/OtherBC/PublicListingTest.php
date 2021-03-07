<?php


namespace App\Tests\unit\OtherBC;

use App\OtherBC\Commands\PublicListing\PublicListingCommandQuery;
use App\OtherBC\Commands\PublicListing\PublicListingHandlerQuery;
use App\OtherBC\Infrastructure\Persistence\AdRepositoryInterface;
use App\OtherBC\Infrastructure\Persistence\PictureRepositoryInterface;
use App\Tests\unit\OtherBC\mothers\AdMother;
use App\Tests\unit\OtherBC\mothers\PictureMother;
use Exception;
use PHPUnit\Framework\TestCase;

class PublicListingTest extends TestCase
{
    /** @var PictureRepositoryInterface|MockInterface */
    private $pictureRepository;
    /** @var AdRepositoryInterface|MockInterface */
    private $adRepository;
    private PublicListingHandlerQuery $handler;

    /**
     * @throws Exception
     */
    public function testGetPublicListing(): void
    {
        //Given
        $command = new PublicListingCommandQuery();

        $ads = [];
        for ($i = 0; $i <= random_int(1, 5); $i++) {
            $ads[] = AdMother::random();
        }

        //When
        $this->withPictureRepository();
        $this->withAdRepository($ads);

        //Then
        $result = $this->handler->__invoke($command);
        self::assertCount(count($ads), $result);
        self::assertEquals($ads[0]->getTypology(), $result[0]->getTypology());
    }

    /**
     * @throws Exception
     */
    protected function withPictureRepository(): void
    {
        $this->pictureRepository()
            ->method('findByIdOrFail')
            ->willReturn(PictureMother::random());
    }

    /**
     * @param array $ads
     */
    protected function withAdRepository(array $ads): void
    {
        $this->adRepository()
            ->method('findRelevantsOrdered')
            ->willReturn($ads);
    }

    /** @return PictureRepositoryInterface|MockInterface */
    protected function pictureRepository()
    {
        if (null === $this->pictureRepository) {
            $this->pictureRepository = $this->createMock(PictureRepositoryInterface::class);
        }
        return $this->pictureRepository;
    }

    /** @return AdRepositoryInterface|MockInterface */
    protected function adRepository()
    {
        if (null === $this->adRepository) {
            $this->adRepository = $this->createMock(AdRepositoryInterface::class);
        }
        return $this->adRepository;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->handler = new PublicListingHandlerQuery(
            $this->adRepository(),
            $this->pictureRepository()
        );
    }
}