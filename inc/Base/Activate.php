<?php

namespace hollisho\translatepress\translate\youdao\inc\Base;

class Activate
{
    public static function handler()
    {
        flush_rewrite_rules();
    }
}