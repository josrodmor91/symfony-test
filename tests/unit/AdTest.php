<?php


namespace App\Tests\unit;

use App\Domain\Ad;
use App\Domain\Picture;
use PHPUnit\Framework\TestCase;

class AdTest extends TestCase
{
    public function testSetScoreChaletIrrelevant(){
        $ad = $this->getAd(
            'CHALET',
            'Este chalet es una ganga',
                    [1, 2],
                    20,
                    null
        );
        $pictures = $this->getPictures(['SD', 'SD']);

        $ad->setScore($pictures);
        self::assertEquals(25, $ad->getScore());
        self::assertNotEmpty($ad->getIrrelevantSince());
    }

    public function testSetScoreChaletRelevant(){
        $ad = $this->getAd(
            'CHALET',
            'Este chalet es una ganga',
            [1, 2],
            20,
            20
        );
        $pictures = $this->getPictures(['SD', 'SD']);

        $ad->setScore($pictures);
        self::assertEquals(65, $ad->getScore());
    }

    public function testSetScoreChaletOver100(){
        $ad = $this->getAd(
            'CHALET',
            'Maravilloso chalet situado en lAs afueras de un pequeño pueblo rural. El entorno es espectacular, las vistas magníficas. ¡Cómprelo ahora!',
            [1, 2],
            20,
            20
        );
        $pictures = $this->getPictures(['HD', 'HD']);

        $ad->setScore($pictures);
        self::assertEquals(100, $ad->getScore());
    }

    public function testSetScorePisoIrrelevant(){
        $ad = $this->getAd(
            'FLAT',
            '',
            [1, 2],
            20,
            null
        );
        $pictures = $this->getPictures(['SD', 'SD']);

        $ad->setScore($pictures);
        self::assertEquals(20, $ad->getScore());
        self::assertNotEmpty($ad->getIrrelevantSince());
    }

    public function testSetScorePisoRelevant(){
        $ad = $this->getAd(
            'FLAT',
            'Este piso Reformado es una ganga',
            [1],
            0,
            null
        );
        $pictures = $this->getPictures(['SD', 'SD']);

        $ad->setScore($pictures);
        self::assertEquals(40, $ad->getScore());
        self::assertEmpty($ad->getIrrelevantSince());
    }

    public function testSetNegativeScoreToZero(){
        $ad = $this->getAd(
            'GARAGE',
            '',
            [],
            0,
            null
        );

        $ad->setScore([]);
        self::assertEquals(0, $ad->getScore());
        self::assertNotEmpty($ad->getIrrelevantSince());
    }

    public function testSetScoreGarageIrrelevant(){
        $ad = $this->getAd(
            'GARAGE',
            '',
            [1],
            0,
            null
        );
        $pictures = $this->getPictures(['SD']);

        $ad->setScore($pictures);
        self::assertEquals(50, $ad->getScore());
        self::assertEmpty($ad->getIrrelevantSince());
    }

    /**
     * @param string $tipology
     * @param string $description
     * @param array $pictures
     * @param int $houseSize
     * @param int|null $gardenSize
     * @return Ad
     */
    public function getAd(string $tipology, string $description, array $pictures, int $houseSize, ?int $gardenSize = null){
        return new Ad(
            1,
            $tipology,
            $description,
            $pictures,
            $houseSize,
            $gardenSize
        );
    }

    /**
     * @param array $qualities
     * @return array
     */
    public function getPictures(array $qualities): array
    {
        $pictures = [];
        foreach ($qualities as $i => $iValue) {
            $pictures[] = new Picture(
                $i,
                ''.$i,
                $iValue
            );
        }
        return $pictures;
    }
}