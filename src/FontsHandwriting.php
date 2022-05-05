<?php

namespace Fonts;

class FontsHandwriting
{

    public static function getPath(): string
    {
        return self::useRandom();
    }

    public static function useRandom(): string
    {
        $list = glob(__DIR__ . '/../assets/*.[tT][tT][fF]');
        return array_rand(array_flip($list));
    }

}
