<?php

namespace Xovi\Sdk\Util;

abstract class ResultHelper
{
    public static function toKeyValueArray(array $array): array
    {
        $result = [];

        foreach ($array as $arrayElement) {
            $result[$arrayElement['name']] = $arrayElement['value'];
        }

        return $result;
    }
}
