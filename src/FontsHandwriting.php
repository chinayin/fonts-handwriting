<?php

namespace Fonts;

class FontsHandwriting
{

    public static function getPath(): string
    {
        return self::useRandom();
    }

    public static function all():array{
        return glob(__DIR__ . '/../assets/*.[tT][tT][fF]');
    }

    public static function useRandom(): string
    {
        $list = self::all();
        return $list[array_rand($list)] ;
    }

}
