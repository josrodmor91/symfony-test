<?php


namespace App\Tests\unit\OtherBC\mothers;

use App\OtherBC\Domain\Picture;
use Exception;

class PictureMother
{
    /**
     * @return Picture
     * @throws Exception
     */
    public static function random(): Picture
    {
        $quality = ['HD', 'SD'];
        return new Picture(
            random_int(1, 10),
            'https://www.idealista.com/pictures/'.random_int(1, 10),
            $quality[random_int(0,1)]
        );
    }
}