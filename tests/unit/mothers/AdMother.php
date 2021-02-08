<?php


namespace App\Tests\unit\mothers;

use App\Domain\Ad;
use Exception;

class AdMother
{
    /**
     * @param null $score
     * @param null $irrelevantSince
     * @return Ad
     * @throws Exception
     */
    public static function random($score = null, $irrelevantSince = null): Ad
    {
        $tipology = ['FLAT', 'GARAGE', 'CHALET'];
        $pictures = [];
        for ($i = 0; $i <= random_int(1, 10); $i++){
            $pictures[] = $i;
        }
        return new Ad(
            random_int(1,10),
            $tipology[random_int(0,2)],
            random_bytes(100),
            $pictures,
            random_int(1,300),
            random_int(1,1000),
            $score,
            $irrelevantSince
        );
    }
}