<?php

namespace SVega9848\VegaReload;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use SVega9848\VegaReload\Commands\ReloadCommand;

class Loader extends PluginBase implements Listener {

    public static Loader $loader;

    public function onEnable(): void {
        self::$loader = $this;
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getCommandMap()->register("vegareload", new ReloadCommand());
    }

    public static function getInstance() : Loader {
        return self::$loader;
    }

}