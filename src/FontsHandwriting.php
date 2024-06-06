<?php

namespace Fonts;

class FontsHandwriting
{
    private static $mapping = [
        'WQSXT' => '王强手写体',
        'MUYAO-SOFTBRUSH-2' => '沐瑶软笔手写体',
        'CYHYBXS' => '蔡云汉硬笔行书简书法',
        'WWWSXT' => '万伟伟手写体',
        'CHENYULUOYAN' => '沉鱼落雁手写体',
    ];

    public static function getPath(): string
    {
        return self::useRandom();
    }

    public static function getFont(string $key): array
    {
        return [
            'name' => self::$mapping[$key] ?? '',
            'path' => __DIR__ . '/../assets/' . $key . '.ttf',
        ];
    }

    public static function all(): array
    {
        return glob(__DIR__ . '/../assets/*.[tT][tT][fF]');
    }

    public static function useRandom(): string
    {
        $list = self::all();
        return $list[array_rand($list)];
    }

}
