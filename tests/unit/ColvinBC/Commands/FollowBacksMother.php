<?php


namespace App\Tests\unit\ColvinBC\Commands;


use App\ColvinBC\Domain\FollowBacks;
use Exception;

class FollowBacksMother
{
    /**
     * @return FollowBacks
     * @throws Exception
     */
    public static function createFollowBacksRandom(): FollowBacks
    {
        $count = random_int(10, 20);
        $names = [];
        for ($i = 0; $i < $count; $i++){
            $names[] = random_bytes(20);
        }
        return new FollowBacks($count, $names);
    }
}