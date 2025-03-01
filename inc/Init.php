<?php
namespace hollisho\translatepress\translate\youdao\inc;

use hollisho\translatepress\translate\youdao\inc\ServiceProvider\RegisterMachineTranslationEngines;
use hollisho\translatepress\translate\youdao\inc\ServiceProvider\RegisterScripts;

/**
 * @author Hollis
 * @desc plugin init entry
 * Class Init
 * @package hollisho\translatepress\translate\youdao\inc
 */
class Init
{
    /**
     * @return string[]
     * @author Hollis
     * @desc get registered services
     */
    public static function getService(): array
    {
        return [
            RegisterScripts::class,
            RegisterMachineTranslationEngines::class,
        ];
    }

    /**
     * @return void
     * @author Hollis
     * @desc load registered services
     */
    public static function registerService()
    {
        foreach (self::getService() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    public static function instantiate($class)
    {
        return new $class;
    }
}