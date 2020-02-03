<?php

namespace TFood;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;

class TFood extends PluginBase implements Listener {

   public function onEnable() {
      $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
   }
   public function onFood(PlayerExhaustEvent $event) {
     $event->setCancelled(true);
   }
}
