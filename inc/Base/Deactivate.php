<?php

namespace hollisho\translatepress\translate\youdao\inc\Base;

class Deactivate
{
    public static function handler()
    {
        flush_rewrite_rules();
    }
}