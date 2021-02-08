<?php


namespace App\Tests\unit;


use App\Commands\CalculateScore\CalculateScoreCommand;
use App\Commands\CalculateScore\CalculateScoreHandler;
use App\Infrastructure\Persistence\AdRepositoryInterface;
use App\Infrastructure\Persistence\PictureRepositoryInterface;
use App\Tests\unit\mothers\AdMother;
use App\Tests\unit\mothers\PictureMother;
use Exception;
use PHPUnit\Framework\TestCase;

class CalculateScoreTest extends TestCase
{
    /** @var PictureRepositoryInterface|MockInterface */
    private $pictureRepository;
    /** @var AdRepositoryInterface|MockInterface */
    private $adRepository;
    private CalculateScoreHandler $handler;

    /**
     * @throws Exception
     */
    public function testCalculateScore(): void
    {
        //Given
        $command = new CalculateScoreCommand();

        //When
        $this->withPictureRepository();
        $this->withAdRepository();

        //Then
        $this->handler->__invoke($command);
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
     * @throws Exception
     */
    protected function withAdRepository(): void
    {
        $ads = [];
        for ($i = 0; $i <= random_int(1, 5); $i++){
            $ads[] = AdMother::random();
        }
        $this->adRepository()
            ->method('findAll')
            ->willReturn($ads);

        $this->adRepository()
            ->expects(self::exactly(count($ads)))
            ->method('store');
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
        $this->handler = new CalculateScoreHandler(
            $this->adRepository(),
            $this->pictureRepository()
        );
    }
}