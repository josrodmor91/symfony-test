<?php


namespace App\Tests\unit;

use App\Commands\QualityListing\QualityListingCommandQuery;
use App\Commands\QualityListing\QualityListingHandlerQuery;
use App\Infrastructure\Persistence\AdRepositoryInterface;
use App\Infrastructure\Persistence\PictureRepositoryInterface;
use App\Tests\unit\mothers\AdMother;
use App\Tests\unit\mothers\PictureMother;
use Exception;
use PHPUnit\Framework\TestCase;

class QualityListingTest extends TestCase
{
    /** @var PictureRepositoryInterface|MockInterface */
    private $pictureRepository;
    /** @var AdRepositoryInterface|MockInterface */
    private $adRepository;
    private QualityListingHandlerQuery $handler;

    /**
     * @throws Exception
     */
    public function testGetQualityListing(): void
    {
        //Given
        $command = new QualityListingCommandQuery();

        $ads = [];
        for ($i = 0; $i <= random_int(1, 5); $i++){
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
            ->method('findIrrelevants')
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
        $this->handler = new QualityListingHandlerQuery(
            $this->adRepository(),
            $this->pictureRepository()
        );
    }
}